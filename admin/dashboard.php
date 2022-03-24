<?php
 $page = 'dashboard';
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
                        <h1 class="h3 mb-0 text-gray-800">Dashboard ⚡</h1>
                    </div>
                    <table class="table table-striped">
                        <thead>
                            <tr>
                                <th scope="col">No</th>
                                <th scope="col">Post Title</th>
                                <th scope="col">Date & Time</th>
                                <th scope="col">Author</th>
                                <th scope="col">Category</th>
                                <th scope="col">Banner</th>
                                <th scope="col">Comments</th>
                                <th scope="col">Action</th>
                                <th scope="col">Details</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php
                        if (isset($_GET['page'])) {
                            $page = $_GET['page'];
                            if ($page <= 0) {
                                $showPostFrom = 0;
                            } else {
                                $showPostFrom = ($page * 3) - 3;
                            }
                            echo $showPostFrom;
                            $Query ="SELECT * FROM new_post 
                        ORDER BY datetime DESC LIMIT $showPostFrom,3";
                        } else {
                            $Query = "SELECT * FROM new_post ORDER BY 
                                      datetime DESC LIMIT 0,3;";
                        }
                                $exe =mysqli_query($conn, $Query);
                                $slno = 0;
                                while ($rows = mysqli_fetch_array($exe)) {
                                    $postid = $rows['id'];
                                    $datetime = $rows['datetime'];
                                    $title = $rows['title'];
                                    $category = $rows['category'];
                                    $author = $rows['author'];
                                    $image = $rows['image'];
                                    $post = $rows['post'];
                                    $slno++; ?>
                            <tr>
                                <th scope="row"><?= $slno ?>
                                </th>
                                <td><?= $title ?>
                                </td>
                                <td><?= htmlentities($datetime)  ?>
                                </td>
                                <td><?= $author  ?>
                                </td>
                                <td><?= $category  ?>
                                </td>
                                <td>
                                    <img class="img-thumbnail"
                                        src="<?= $image ?>"
                                        alt="<?= $title ?>"
                                        srcset="">
                                </td>
                                <td>Processing</td>
                                <td>
                                    <a href="editpost.php?edit=<?= $postid ?>"
                                        class="btn btn-warning" target="_blank">
                                        Edit
                                    </a>
                                    <a href="deletepost.php?del=<?= $postid ?>"
                                        class="btn btn-danger" target="_blank">
                                        Delete
                                    </a>
                                </td>
                                <td>
                                    <a href="http://localhost/blog/blog-single.php?id=<?= $postid ?>"
                                        class="btn btn-outline-info" target="_blank">
                                        view
                                    </a>
                                </td>
                            </tr>
                            <?php
                                }?>
                        </tbody>
                    </table>
                    <nav aria-label="Page navigation example">
                        <ul class="pagination">
                            <?php if (isset($_GET['page']) && $page>1)  : ?>
                            <li class="page-item">
                                <a class="page-link"
                                    href="index.php?page=<?=$page - 1 ?>">Previous</a>
                            </li>
                            <?php  endif ?>
                            <?php
                    $queryPagination = "SELECT COUNT(*) FROM new_post";
                    $executePagination = mysqli_query($conn, $queryPagination);
                    $rowPagination = mysqli_fetch_array($executePagination);
                    $TotalPost = array_shift($rowPagination);
                    $postPerPage = ceil($TotalPost / 3);
                    for ($i=1; $i <= $postPerPage ; $i++) { ?>
                            <li class="page-item">
                                <a class="page-link"
                                    href="dashboard.php?page=<?= $i ?>">
                                    <?= $i ?>
                                </a>
                            </li>
                            <?php } ?>
                            <?php if (isset($_GET['page']) && $page+1<=$postPerPage)  : ?>
                            <li class="page-item">
                                <a class="page-link"
                                    href="index.php?page=<?=$page + 1 ?>">Next</a>
                            </li>
                            <?php  endif ?>
                        </ul>
                    </nav>

                </div>
                <!-- /.container-fluid -->
            </div>
            <!-- End of Main Content -->
            <?php  require_once './partials/footer.php';
