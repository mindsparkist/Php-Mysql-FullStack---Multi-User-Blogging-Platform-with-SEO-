<?php
 $page = 'admin-Add';
 require_once './partials/db.php';

$sql_success = false;
$sql_unsuccess = false;

if (isset($_POST['submit'])) {
    $Added_By = 'root';
    date_default_timezone_set("Asia/Kolkata");
    $datetime = date('d/m/Y h:i:s a', time());
    $AdminName=htmlspecialchars(stripslashes(trim($_POST['NameAdmin'])));
    $AdminEmail=htmlspecialchars(stripslashes(trim($_POST['EmailAdmin'])));
    $Adminpassword=htmlspecialchars(stripslashes(trim($_POST['Adminpassword'])));
    $Adminpassword_hashed = password_hash($Adminpassword, PASSWORD_DEFAULT);
    $sql = "INSERT INTO admin_registration 
    (datetime, adminname, adminPassword, adminEmail, addedby)
    VALUES 
    ('$datetime','$AdminName','$Adminpassword_hashed','$AdminEmail','$Added_By')";
      
    if ($conn->query($sql) === true) {
        $sql_success = true;
    } else {
        $sql_unsuccess = true;
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
?>
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
            var name = document.f1.NameAdmin.value;
            var email = document.f1.EmailAdmin.value;
            var password = document.f1.Adminpassword.value;
            var Confpassword = document.f1.ConfPassword.value;
            if (name.length == "" &&
                password.length == "" &&
                email.length == "" &&
                Confpassword.length == ""
            ) {
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
                if (password.length != Confpassword.length) {
                    Swal.fire({
                        icon: 'error',
                        title: 'Field Empty',
                        text: 'Password Must Match Field Empty',
                    })
                    return false;
                }
                if (email.length == "") {
                    Swal.fire({
                        icon: 'error',
                        title: 'Field Empty',
                        text: 'Password Must Match Field Empty',
                    })
                    return false;
                }
            }
        }
    </script>
</head>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- sidebar include -->
        <?php  require_once './partials/sidebar.php'; ?>
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php  require_once './partials/topbar.php'; ?>


                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <!-- sql error -->
                    <?php if ($sql_success) : ?>
                    <div class="alert alert-warning" role="alert">
                        Admin Added successfully
                    </div>
                    <?php endif ?>
                    <?php if ($sql_unsuccess) : ?>
                    <div class="alert alert-warning" role="alert">
                        Oops! Some Error Happeded
                    </div>
                    <?php endif ?>
                    <!-- Sql  -->
                    <form
                        action="<?= ($_SERVER['PHP_SELF'])?>"
                        method="POST" name="f1" onsubmit="return validation()">
                        <!-- 2 column grid layout with text inputs for the first and last names -->
                        <!-- Text input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="NameAdmin">Admin`s name</label>
                            <input type="text" id="NameAdmin" name="NameAdmin" class="form-control" />
                        </div>


                        <!-- Email input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="EmailAdmin">Admin`s Email</label>
                            <input type="email" id="EmailAdmin" name="EmailAdmin" class="form-control" />
                        </div>

                        <!-- Password input -->
                        <div class="form-outline mb-4">
                            <label class="form-label" for="Adminpassword">Password</label>
                            <input type="password" id="Adminpassword" name="Adminpassword" class="form-control" />
                        </div>

                        <div class="form-outline mb-4">
                            <label class="form-label" for="ConfPassword">Confirm Password</label>
                            <input type="password" id="ConfPassword" name="ConfPassword" class="form-control" />
                        </div>


                        <!-- Submit button -->
                        <button type="submit" name="submit" class="btn btn-primary btn-block mb-4">Add Admins</button>
                    </form>
                    <!-- Approved Admins -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Added Admins</h1>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Date & Time</th>
                                <th scope="col">Admin Name</th>
                                <th scope="col">Added By</th>
                                <th scope="col">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $adminQuery = "SELECT id,datetime,adminname,addedby
                             FROM admin_registration";
                            $adminQueryrun =mysqli_query($conn, $adminQuery);
                                $slno = 0;
                                while ($rows = mysqli_fetch_array($adminQueryrun)) {
                                    $A_id = $rows['id'];
                                    $Admindatetime = $rows['datetime'];
                                    $Admin_Name = $rows['adminname'];
                                    $addedby = $rows['addedby'];
                                    $slno++; ?>
                            <tr>
                                <th scope="row">
                                    <?= $slno ?>
                                </th>
                                <td>
                                    <?= $Admindatetime ?>
                                </td>
                                <td>
                                    <?= $Admin_Name ?>
                                </td>
                                <td>
                                    <?= $addedby ?>
                                </td>
                                <td>

                                    <a href="commentDel.php?id=<?= $A_id ?>"
                                        class="btn btn-danger">
                                        Delete
                                    </a>

                                </td>
                            </tr>
                            <?php
                                }?>
                        </tbody>
                    </table>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php  require_once './partials/footer.php';
