<?php
 $page = 'contact';
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
                        <h1 class="h3 mb-0 text-gray-800">Contact 📫</h1>
                    </div>
                    <div class="container mt-5" id="get">
                        <table id="example" class="display" cellspacing="0">
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email Address</th>
                                    <th>Subject</th>
                                    <th>Message</th>
                                </tr>
                            </thead>
                        </table>
                    </div>
                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <script type="text/javascript">
                $(document).ready(function() {
                    $("#example").DataTable({
                        "processing": true,
                        "serverSide": true,
                        "ajax": {
                            "url": "get.php",
                            "dataSrc": ""
                        },
                        "columns": [{
                                "data": "name"
                            },
                            {
                                "data": "email"
                            },
                            {
                                "data": "subject"
                            },
                            {
                                "data": "description"
                            }
                        ]
                    })
                })
            </script>
            <?php  require_once './partials/footer.php';
