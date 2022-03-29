<?php
$show_rechapta = true;
require_once './partials/_header.php';
require_once './partials/_db.php';

$missing = false;
$sql_success = false;
$sql_unsuccess = false;


if (isset($_POST['submit']) && $_POST['g-recaptcha-response'] != "") {
    $secret = '6LfypSgfAAAAALtgb0eGBp5NjRnTiZA8Ex8eTOdU';
    $verifyResponse = file_get_contents('https://www.google.com/recaptcha/api/siteverify?secret=' . $secret . '&response=' . $_POST['g-recaptcha-response']);
    $responseData = json_decode($verifyResponse);
    if ($responseData->success) {
        $Name=htmlspecialchars(stripslashes(trim($_POST['name'])));
        $Email=htmlspecialchars(stripslashes(trim($_POST['email'])));
        $Subject=htmlspecialchars(stripslashes(trim($_POST['subject'])));
        $Message=htmlspecialchars(stripslashes(trim($_POST['message'])));

        if (empty($Name)||empty($Email)||empty($Subject)||empty($Message)) {
            $missing = true;
        }
        if ($missing == false) {
            $sql="INSERT INTO `contact`(`name`, `email`, `subject`, `description`) VALUES ('$Name','$Email','$Subject','$Message')";
            if ($conn->query($sql) === true) {
                $sql_success = true;
            } else {
                $sql_unsuccess = true;
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
}


?>
<!-- =========== Main Container ============= -->

<div class="main-content-area">
    <div class="container">
        <?php if ($missing) : ?>
        <div class="alert alert-warning" role="alert">
            Please Fill The Required Field
        </div>
        <?php endif ?>
        <!-- div -->
        <?php if ($sql_success) : ?>
        <div class="alert alert-warning" role="alert">
            Sent successfully
        </div>
        <?php endif ?>
        <?php if ($sql_unsuccess) : ?>
        <div class="alert alert-warning" role="alert">
            Sending Unsuccessful
        </div>
        <?php endif ?>
        <div class="single-post-wrap page-wrap">
            <div class="post-head d-flex">
                <div class="header-inner align-self-center">
                    <h1 class="title">GET IN TOUCH</h1>
                </div>
            </div>
            <div class="post-content m-auto">
                <p>Out believe has request not how comfort evident. Up delight cousins we feeling minutes. Genius has
                    looked end piqued spring.</p>
                <p><strong>info@excellentdynamics.biz</strong><br><strong>+487 320 80 775</strong></p>
                <div role="form" class="wpcf7" id="wpcf7-f8-p7-o1" lang="en-US" dir="ltr">
                    <div class="screen-reader-response" role="alert" aria-live="polite"></div>

                    <form action="" method="POST" class="wpcf7-form init" novalidate="novalidate" id="userForm">
                        <p><span class="wpcf7-form-control-wrap your-name">
                                <input type="text" name="name" size="40" class="wpcf7-form-control wpcf7-text"
                                    aria-invalid="false" placeholder="Full Name" required>
                            </span>
                            <br>
                            <span class="wpcf7-form-control-wrap your-email">
                                <input type="email" name="email" value="" size="40"
                                    class="wpcf7-form-control wpcf7-text wpcf7-email wpcf7-validates-as-email"
                                    aria-invalid="false" placeholder="Email" required>
                            </span>
                            <br>
                            <span class="wpcf7-form-control-wrap your-subject">
                                <input type="text" name="subject" value="" size="40"
                                    class="wpcf7-form-control wpcf7-text" aria-invalid="false" placeholder="Subject"
                                    required>
                            </span>
                            <br>
                            <span class="wpcf7-form-control-wrap your-message">
                                <textarea name="message" cols="40" rows="10" class="wpcf7-form-control wpcf7-textarea"
                                    aria-invalid="false" placeholder="Message">
                                </textarea>
                            </span>
                        <div class="g-recaptcha" data-sitekey="6LfypSgfAAAAAE-0EhzGe1h8i6oCZVeUNXnIRyyw"></div>
                        <br>
                        <input type="submit" name="submit" value="submit" class="wpcf7-form-control wpcf7-submit">
                        </p>
                        <div class="wpcf7-response-output" role="alert" aria-hidden="true"></div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div><!-- =========== End Main Container ============= -->
<?php require_once './partials/_footer.php';
