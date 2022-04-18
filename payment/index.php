<?php
require_once '../vendor/autoload.php';
$dotenv = Dotenv\Dotenv::createImmutable(__DIR__);
$dotenv->safeLoad();
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pay Now</title>
    <!-- add googole font -->
    <link href="https://fonts.googleapis.com/css?family=Nunito:400,300" rel="stylesheet" />
    <!-- normalise css -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/4.2.0/normalize.min.css" />
    <!-- add custom style sheet -->
    <link rel="stylesheet" href="style.css" />
    <!-- js -->
    <script src="https://code.jquery.com/jquery-3.5.1.min.js"></script>
    <script src="https://checkout.razorpay.com/v1/checkout.js"></script>
</head>

<body>
    <form action="#" method="post">
        <h1>Pay Now</h1>

        <fieldset>
            <legend><span class="number">1</span> Your basic info</legend>

            <label for="name">Name:</label>
            <input type="text" id="name" name="user_name" autocomplete="off" required />

            <label for="mail">Email:</label>
            <input type="email" id="mail" name="user_email" autocomplete="off" required />

            <label for="Mobile">Mobile:</label>
            <input type="number" id="Mobile" name="user_Mobile" autocomplete="off" required />

            <label for="Address">Address:</label>
            <input type="text" id="Address" name="user_Address" autocomplete="off" required />

            <label for="Company">Company:</label>
            <input type="text" id="Company" name="user_Company" autocomplete="off" required />

            <label for="Ammount">Ammount:</label>
            <input type="number" id="Ammount" name="user_Ammount" autocomplete="off" required />

            <label>Monthly Payment:</label>
            <input type="checkbox" id="Monthly" value="interest_Monthly" name="user_Monthly" />
            <label class="light" for="Monthly">
                Would you like to pay monthly?
            </label>
            <br />
        </fieldset>
        <button type="button" name="p-btn" id="p-btn" onclick="pay_now()">Pay Now</button>
    </form>
    <script>
        function pay_now() {
            console.log("pay_now");
            let monthly = false;
            let Company = jQuery('#Company').val();
            let name = jQuery('#name').val();
            let mail = jQuery('#mail').val();
            let Mobile = jQuery('#Mobile').val();
            let Address = jQuery('#Address').val();
            let Ammount = jQuery('#Ammount').val();

            // Initializing Variables With Regular Expressions
            var txt_regex = /^[a-z ,.'-]+$/i;
            var mail_regex = /^([a-zA-Z0-9_\.\-])+\@(([a-zA-Z0-9\-])+\.)+([a-zA-Z0-9]{2,4})+$/;
            var add_regex = /^[a-zA-Z0-9\s,.'-]+$/;
            var number_regex = /^[0-9]+$/;

            // Validating Name Field
            if (name.length == 0) {
                alert("Name Field is Empty");
                return false;
            } else if (!txt_regex.test(name)) {
                alert("Please Enter Valid Name");
                return false;
            }
            // Validating Email Field
            if (mail.length == 0) {
                alert("Email Field is Empty");
                return false;
            } else if (!mail_regex.test(mail)) {
                alert("Please Enter Valid Email");
                return false;
            }
            // Validating Mobile Field
            if (Mobile.length == 0) {
                alert("Mobile Field is Empty");
                return false;
            } else if (!number_regex.test(Mobile)) {
                alert("Please Enter Valid Mobile Number");
                return false;
            } else if (Mobile.length < 10 || Mobile.length > 10) {
                alert("Mobile Number must be 10 Digits");
                return false;
            }
            // Validating Address Field
            if (Address.length == 0) {
                alert("Address Field is Empty");
                return false;
            } else if (!add_regex.test(Address)) {
                alert("Please Enter Valid Address");
                return false;
            }
            // Validating Company Field
            if (Company.length == 0) {
                alert("Company Field is Empty");
                return false;
            } else if (!txt_regex.test(Company)) {
                alert("Please Enter Valid Company Name");
                return false;
            }
            // Validating Ammount Field
            if (Ammount.length == 0) {
                alert("Ammount Field is Empty");
                return false;
            } else if (!number_regex.test(Ammount)) {
                alert("Please Enter Valid Ammount");
                return false;
            }
            // Validating Monthly Field
            if ($('#Monthly').is(":checked")) {
                monthly = true;
            }
            // AJAX Request
            jQuery.ajax({
                type: 'post',
                url: 'payment_process.php',
                data: "amt=" + Ammount + "&name=" + name + "&Company=" + Company + "&mail=" + mail +
                    "&Mobile=" + Mobile + "&Address=" + Address + "&monthly=" + monthly,
                success: function(result) {
                    var options = {
                        "key": "<?= $_ENV['RAZORPAY_KEY'] ?>",
                        "amount": Ammount * 100,
                        "currency": "INR",
                        "name": "PHP TIMES INC",
                        "description": "Make A Donation",
                        "image": "https://i.ibb.co/2yph1k3/img-php-min.jpg",
                        "handler": function(response) {
                            jQuery.ajax({
                                type: 'post',
                                url: 'payment_process.php',
                                data: "payment_id=" + response.razorpay_payment_id,
                                success: function(result) {
                                    window.location.href = "success.php";
                                }
                            });
                        }
                    };
                    var rzp1 = new Razorpay(options);
                    rzp1.open();
                }
            });
        }
    </script>
</body>

</html>