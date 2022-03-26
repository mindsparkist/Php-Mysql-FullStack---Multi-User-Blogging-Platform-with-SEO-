<?php
 $page = 'admin-comments';
 require_once './partials/header.php';
 require_once './partials/db.php';
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
                        <h1 class="h3 mb-0 text-gray-800">Un-Approved Comments</h1>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Date & Time</th>
                                <th scope="col">Author</th>
                                <th scope="col">Comments</th>
                                <th scope="col">Approve</th>
                                <th scope="col">Delete Comment</th>
                                <th scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $commentQuery = "SELECT * FROM comment WHERE status = 'OFF'";
                            $commentQuery =mysqli_query($conn, $commentQuery);
                                $slno = 0;
                                while ($rows = mysqli_fetch_array($commentQuery)) {
                                    $commentid = $rows['id'];
                                    $commentdatetime = $rows['datetime'];
                                    $commentdetials = $rows['comment'];
                                    $commentAuthor = $rows['commentauth'];
                                    $commentMail = $rows['commentmail'];
                                    $commentstatus = $rows['status'];
                                    $commentpost_id  = $rows['post_id'];
                                    $slno++; ?>
                            <tr>
                                <th scope="row">
                                    <?= $slno ?>
                                </th>
                                <td>
                                    <?= $commentdatetime ?>
                                </td>
                                <td>
                                    <?= $commentAuthor ?>
                                </td>
                                <td>
                                    <?= $commentdetials ?>
                                </td>
                                <td>
                                    <a href="commentApprove.php?uid=<?=$commentid?>"
                                        class="btn btn-success">
                                        Approve
                                    </a>
                                </td>
                                <td>

                                    <a href="commentDel.php?id=<?=$commentid?>"
                                        class="btn btn-danger">
                                        Delete
                                    </a>

                                </td>
                                <td>
                                    <a href="http://localhost/blog/blog-single.php?id=<?= $commentpost_id ?>"
                                        class="btn btn-outline-info" target="_blank">
                                        view
                                    </a>
                                </td>
                            </tr>
                            <?php
                                }?>
                        </tbody>
                    </table>
                    <!-- Approved Comments -->
                    <div class="d-sm-flex align-items-center justify-content-between mb-4">
                        <h1 class="h3 mb-0 text-gray-800">Approved Comments</h1>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Date & Time</th>
                                <th scope="col">Author</th>
                                <th scope="col">Comments</th>
                                <th scope="col">Approve</th>
                                <th scope="col">Delete Comment</th>
                                <th scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                            $commentQuery = "SELECT * FROM comment WHERE status = 'ON'";
                            $commentQuery =mysqli_query($conn, $commentQuery);
                                $slno = 0;
                                while ($rows = mysqli_fetch_array($commentQuery)) {
                                    $commentid = $rows['id'];
                                    $commentdatetime = $rows['datetime'];
                                    $commentdetials = $rows['comment'];
                                    $commentAuthor = $rows['commentauth'];
                                    $commentMail = $rows['commentmail'];
                                    $commentstatus = $rows['status'];
                                    $commentpost_id  = $rows['post_id'];
                                    $slno++; ?>
                            <tr>
                                <th scope="row">
                                    <?= $slno ?>
                                </th>
                                <td>
                                    <?= $commentdatetime ?>
                                </td>
                                <td>
                                    <?= $commentAuthor ?>
                                </td>
                                <td>
                                    <?= $commentdetials ?>
                                </td>
                                <td>
                                    <a href="commentApprove.php?cid=<?=$commentid?>"
                                        class="btn btn-warning">
                                        Disapprove
                                    </a>
                                </td>
                                <td>

                                    <a href="commentDel.php?id=<?=$commentid?>"
                                        class="btn btn-danger">
                                        Delete
                                    </a>

                                </td>
                                <td>
                                    <a href="http://localhost/blog/blog-single.php?id=<?= $commentpost_id ?>"
                                        class="btn btn-outline-info" target="_blank">
                                        view
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
