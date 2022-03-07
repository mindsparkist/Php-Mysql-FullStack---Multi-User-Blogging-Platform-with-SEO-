<?php
 $page = 'dashboard';
 require_once './partials/header.php';
?>

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
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Dashboard !</h1>
                    </div>


                </div>
                <!-- /.container-fluid -->

            </div>
            <!-- End of Main Content -->
            <?php  require_once './partials/footer.php';
