<?php
require_once './partials/db.php';
$WrongUserName = false;
$UserNotFound = false;
session_start();
if (isset($_POST['submit'])) {
    $username=htmlspecialchars(stripslashes(trim($_POST['username'])));
    $password=htmlspecialchars(stripslashes(trim($_POST['password'])));
    $Remember_me=htmlspecialchars(stripslashes(trim($_POST['Remember_me'])));
    $check_email = "SELECT * FROM admin_registration WHERE adminEmail = '$username'";
    $res = mysqli_query($conn, $check_email);
    if (mysqli_num_rows($res) > 0) {
        $fetch = mysqli_fetch_assoc($res);
        $fetch_pass = $fetch['adminPassword'];
        if (password_verify($password, $fetch_pass) || $fetch_pass == $password) {
            $_SESSION['email'] = $username;
            $_SESSION['name'] = $fetch['adminname'];
            header("Location: dashboard.php");
        } else {
            $WrongUserName = true;
            echo "password Dont Match";
            header("Location: index.php");
        }
    } else {
        $UserNotFound = true;
        echo "No User Exist";
        header("Location: index.php");
    }
}
?>
<!-- Header Added -->
<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>SB Admin 2 - Dashboard</title>

    <!-- Custom fonts for this template-->
    <link href="vendor/fontawesome-free/css/all.min.css" rel="stylesheet" type="text/css">
    <link
        href="https://fonts.googleapis.com/css?family=Nunito:200,200i,300,300i,400,400i,600,600i,700,700i,800,800i,900,900i"
        rel="stylesheet">

    <!-- Custom styles for this template-->
    <link href="css/sb-admin-2.css" rel="stylesheet">

    <!-- jquery -->
    <script src="vendor/jquery/jquery.min.js"></script>

    <!-- Sweet Alert -->
    <script src="vendor/sweetalert2/sweetalert2@11.js"></script>
    <!-- sweet alert script -->
    <script>
        function validation() {
            var name = document.f1.username.value;
            var password = document.f1.password.value;
            if (name.length == "" && password.length == "") {
                Swal.fire({
                    icon: 'error',
                    title: 'Field Empty',
                    text: 'Required Field`s Are Empty',
                })
                return false;
            } else {
                if (name.length == "") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Field Empty',
                        text: 'Name Field Empty',
                    })
                    return false;
                }
                if (password.length == "") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Field Empty',
                        text: 'Password Field Empty',
                    })
                    return false;
                }
            }
        }
    </script>
</head>

<body class="bg-gradient-primary">

    <div class="container">
        <?php if ($UserNotFound || $WrongUserName) : ?>
        <div class="alert alert-warning" role="alert">
            Some Error Occure
        </div>
        <?php endif ?>

        <!-- Outer Row -->
        <div class="row justify-content-center">

            <div class="col-xl-10 col-lg-12 col-md-9">

                <div class="card o-hidden border-0 shadow-lg my-5">
                    <div class="card-body p-0">
                        <!-- Nested Row within Card Body -->
                        <div class="row">
                            <div class="col-lg-6 d-none d-lg-block bg-login-image"></div>
                            <div class="col-lg-6">
                                <div class="p-5">
                                    <div class="text-center">
                                        <h1 class="h4 text-gray-900 mb-4">Welcome Back!</h1>
                                    </div>
                                    <form class="user" method="POST"
                                        action="<?= ($_SERVER['PHP_SELF']);?>"
                                        name="f1" onsubmit="return validation()">
                                        <div class=" form-group">
                                            <input type="text" class="form-control form-control-user" id="username"
                                                aria-describedby="emailHelp" placeholder="Enter Username Or Email"
                                                name="username">
                                        </div>
                                        <div class="form-group">
                                            <input type="text" class="form-control form-control-user" id="password"
                                                placeholder="Password" name="password">
                                        </div>
                                        <div class="form-group">
                                            <div class="custom-control custom-checkbox small">
                                                <input type="checkbox" class="custom-control-input" id="customCheck"
                                                    name="Remember_me" value="yes">
                                                <label class="custom-control-label" for="customCheck">Remember
                                                    Me</label>
                                            </div>
                                        </div>
                                        <button type="submit" name="submit" class="btn btn-primary btn-user btn-block">
                                            Login
                                        </button>
                                        <hr>
                                        <!-- <a href="index.html" class="btn btn-google btn-user btn-block">
                                            <i class="fab fa-google fa-fw"></i> Login with Google
                                        </a>
                                        <a href="index.html" class="btn btn-facebook btn-user btn-block">
                                            <i class="fab fa-facebook-f fa-fw"></i> Login with Facebook
                                        </a> -->
                                    </form>
                                    <hr>
                                    <!-- <div class="text-center">
                                        <a class="small" href="forgot-password.php">Forgot Password?</a>
                                    </div> -->
                                    <!-- <div class="text-center">
                                        <a class="small" href="register.html">Create an Account!</a>
                                    </div> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
    <?php
require_once './partials/footer.php';
