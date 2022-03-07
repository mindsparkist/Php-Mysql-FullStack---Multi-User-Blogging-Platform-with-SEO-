<?php
$page = 'category';
require_once './partials/db.php';
require_once './partials/header.php';
    $missing = false;
    $sql_success = false;
    $sql_unsuccess = false;
    $admin = 'Devoloper '.rand(1, 1024);
    if (isset($_POST['submit'])) {
        $categories = htmlspecialchars(stripslashes(trim($_POST['categories'])));
        if (empty($categories)) {
            $missing = true;
        }
        date_default_timezone_set("Asia/Kolkata");
        $datetime = date('d/m/Y h:i:s a', time());
        if ($missing == false) {
            $sql = "INSERT INTO `categories`(`datetime`, `name`, `categoryname`) VALUES ('$datetime','$admin','$categories')";
      
            if ($conn->query($sql) === true) {
                $sql_success = true;
            } else {
                $sql_unsuccess = true;
                echo "Error: " . $sql . "<br>" . $conn->error;
            }
        }
    }
?>

<body id="page-top">

    <!-- Page Wrapper -->
    <div id="wrapper">

        <?php  require_once './partials/sidebar.php'; ?>

        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <?php  require_once './partials/topbar.php'; ?>

                <!-- Begin Page Content -->
                <div class="container-fluid">
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard</h1>
                    </div>
                    <?php if ($missing) : ?>
                    <div class="alert alert-warning" role="alert">
                        Please Fill The Required Field
                    </div>
                    <?php endif ?>
                    <!-- div -->
                    <?php if ($sql_success) : ?>
                    <div class="alert alert-warning" role="alert">
                        record inserted successfully
                    </div>
                    <?php endif ?>
                    <?php if ($sql_unsuccess) : ?>
                    <div class="alert alert-warning" role="alert">
                        record inserted Unsuccessfully
                    </div>
                    <?php endif ?>
                    <!-- form -->
                    <form class="form-inline"
                        action="<?php echo $_SERVER['PHP_SELF'];?>"
                        method="POST">
                        <div class="form-group mx-sm-3 mb-2">
                            <label for="inputcat" class="sr-only">Name Of Categories</label>
                            <input type="text" class="form-control" id="inputcat" name="categories"
                                placeholder="Name Of Category" autocomplete="off">
                        </div>
                        <button type="submit" name="submit" class="btn btn-primary mb-2">Add</button>
                    </form>
                    <div class="mt-3"></div>
                    <!-- display -->
                    <?php  $sqlf = "SELECT * FROM `categories`";
        if ($res = mysqli_query($conn, $sqlf)) {
            if (mysqli_num_rows($res) > 0) {
                echo "<table class=\"table\">";
                echo "<thead>";
                echo "<tr>";
                echo "<th scope=\"col\">Sl No</th>";
                echo "<th scope=\"col\">Date&Time</th>";
                echo "<th scope=\"col\">Name</th>";
                echo "<th scope=\"col\">Category Name</th>";
                echo "</tr>";
                echo "</thead>";
                while ($row = mysqli_fetch_array($res)) {
                    echo "<tbody>";
                    echo "<tr>";
                    echo "<td>".$row['id']."</td>";
                    echo "<td>".$row['datetime']."</td>";
                    echo "<td>".$row['name']."</td>";
                    echo "<td>".$row['categoryname']."</td>";
                    echo "</tr>";
                    echo "</tbody>";
                }
                echo "</table>";
            } else {
                echo "<p class=\"ml-3 text-center\">No matching records are found.</p>";
            }
        } else {
            echo "ERROR: Could not able to execute $sqlf. "
                                        .mysqli_error($conn);
        }
        mysqli_close($conn);
?>
                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->

            <?php  require_once './partials/footer.php';
