<?php require_once './partials/_db.php'; ?>
<?php require_once './partials/_header.php'; ?>
<!-- =========== Main Container ============= -->
<div class="main-content-area">
    <div class="featured-posts-section">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-6 large-post post-wrap">
                    <?php
                    if (isset($_GET['page'])) {
                        $page = $_GET['page'];
                        if ($page <= 0) {
                            $showPostFrom = 0;
                        } else {
                            $showPostFrom = ($page * 3) - 3;
                        }
                        $sql ="SELECT * FROM new_post 
                        ORDER BY datetime DESC LIMIT $showPostFrom,3";
                    } else {
                        // normal Query
                        $sql ="SELECT * FROM new_post 
                        ORDER BY datetime DESC LIMIT 0,3";
                    }
                        $exe =mysqli_query($conn, $sql);
                    while ($rows = mysqli_fetch_array($exe)) {
                        $postid = $rows['id'];
                        $datetime = $rows['datetime'];
                        $title = $rows['title'];
                        $category = $rows['category'];
                        $author = $rows['author'];
                        $image = $rows['image'];
                        $post = $rows['post']; ?>

                    <a href="blog-single.php?id=<?= $postid ?>">
                        <div class="featured-image-wrap">
                            <div class="featured-image"
                                style="background-image:url(./admin/<?= $image ?>);">
                            </div>
                            <div class="overlay">
                                <h2 class="title h3"><?= $title?>
                                </h2>
                                <time class="date"
                                    datetime="<?= htmlentities($datetime); ?>"><?= htmlentities($datetime); ?>
                                </time>
                            </div>
                        </div>
                    </a>
                    <div class="excerpt">
                        <p>
                            <?php
                             $excerpt = substr($post, 0, 320);
                        echo html_entity_decode($excerpt); ?>
                        </p>
                    </div>
                    <?php
                    } ?>
                    <!-- Pagination -->
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
                                    href="index.php?page=<?= $i ?>">
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
                <!-- About Us  -->
                <!-- end About Us -->
                <h3>Recomended Post</h3>
                <?php
                 $sqlSidebar ="SELECT * FROM new_post WHERE id>15  
                        ORDER BY id ASC LIMIT 0,5";
                $exes =mysqli_query($conn, $sqlSidebar);
                    while ($rows = mysqli_fetch_array($exes)) {
                        $postid = $rows['id'];
                        $datetime = $rows['datetime'];
                        $title = $rows['title'];
                        $category = $rows['category'];
                        $author = $rows['author'];
                        $image = $rows['image'];
                        $post = $rows['post']; ?>
                <div class="col-lg-6 small-post post-wrap">
                    <a href="blog-single.php?id=<?= $postid ?>">
                        <div class="featured-image-wrap">
                            <div class="featured-image"
                                style="background-image:url(./admin/<?= $image ?>);">
                            </div>
                        </div>
                    </a>
                    <div class="content-wrap">
                        <div class="tag">
                            <a href="#" rel="category tag">
                                <?=$category?>
                            </a>
                        </div>

                        <h2 class="title h4">
                            <a
                                href="blog-single.php?id=<?= $postid ?>">
                                <?= $title?>
                            </a>
                        </h2>
                        <time class="date"
                            datetime="<?= htmlentities($datetime); ?>">
                            <?= htmlentities($datetime); ?>
                        </time>
                    </div>
                </div>
                <?php
                    } ?>
                <!-- Recent Post -->
                <h3>Recent Post</h3>
                <?php
                $sqlRecent ="SELECT * FROM new_post 
                        ORDER BY id DESC LIMIT 0,5";
                $exeR =mysqli_query($conn, $sqlRecent);
                    while ($rows = mysqli_fetch_array($exeR)) {
                        $postid = $rows['id'];
                        $datetime = $rows['datetime'];
                        $title = $rows['title'];
                        $category = $rows['category'];
                        $author = $rows['author'];
                        $image = $rows['image'];
                        $post = $rows['post']; ?>
                <div class="col-lg-6 small-post post-wrap">
                    <a href="blog-single.php?id=<?= $postid ?>">
                        <div class="featured-image-wrap">
                            <div class="featured-image"
                                style="background-image:url(./admin/<?= $image ?>);">
                            </div>
                        </div>
                    </a>
                    <div class="content-wrap">
                        <div class="tag">
                            <a href="#" rel="category tag">
                                <?= $category ?>
                            </a>
                        </div>
                        <h2 class="title h4">
                            <a
                                href="blog-single.php?id=<?= $postid ?>">
                                <?= $title ?>
                            </a>
                        </h2>
                        <time class="date" datetime="htmlentities($datetime);">
                            htmlentities($datetime);
                        </time>
                    </div>
                </div>
                <!-- End Of Popular Post Us  -->
                <?php
                    } ?>
            </div>
        </div>
    </div>

</div><!-- =========== End Main Container ============= -->
<?php require_once './partials/_footer.php';
