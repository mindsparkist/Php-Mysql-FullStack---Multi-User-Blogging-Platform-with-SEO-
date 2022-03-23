<?php
$page ='delcate';
require_once './partials/db.php';
require_once './partials/header.php';
$queryparam = $_GET['cat'];


if (isset($_POST['deltcategory'])) {
    if (empty($errors)) {
        $queryparam = $_GET['cat'];
        $sql = "DELETE FROM categories WHERE id = '$queryparam'";
      
        if ($conn->query($sql) === true) {
            header("Location: http://localhost/blog/admin/categories.php");
        } else {
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
} ?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">
        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php  require_once './partials/topbar.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">
                            Delete Category ❌
                        </h1>
                    </div>
                    <!-- add new post form -->
                    <form
                        action="deletecategory.php?cat=<?= $queryparam  ?>"
                        method="POST">
                        <a type="submit" name="deltcategory" value="deltcategory"
                            class="btn btn-outline-danger btn-lg btn-block">Delete</a>
                    </form>
                </div>
                <!-- /.container-fluid -->

            </div>

        </div>
    </div>
    <!-- End of Main Content -->
    <?php  require_once './partials/footer.php';
