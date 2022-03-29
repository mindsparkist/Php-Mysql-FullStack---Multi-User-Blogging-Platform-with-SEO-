<?php
require_once './partials/_db.php';
require_once './partials/_header.php';
$pageCategory = $_GET['cat'];
?>
<!-- =========== Main Container ============= -->
<div class="main-content-area">
    <div class="container">
        <div class="cover-wrap text-center">
            <div class="cover-inner m-auto">
                <h1 class="name">Category: <?=$pageCategory?>
                </h1>
            </div>
        </div>
        <!-- loop -->
        <?php
        $sql ="SELECT * FROM new_post WHERE category = '$pageCategory'";
        $exe =mysqli_query($conn, $sql);
         while ($rows = mysqli_fetch_array($exe)) :
                        $postid = $rows['id'];
                        $datetime = $rows['datetime'];
                        $title = $rows['title'];
                        $category = $rows['category'];
                        $author = $rows['author'];
                        $image = $rows['image'];
                        $post = $rows['post']; ?>
        <div class="post-item clearfix post">
            <div class="row">
                <div class="col-md-6">
                    <a href="blog-single.php?id=<?= $postid ?>">
                        <div class="featured-image-wrap">
                            <div class="featured-image"
                                style="background-image:url(./admin/<?= $image ?>);">
                            </div>
                        </div>
                    </a>
                </div>
                <div class="col-md-6 content-wrap">
                    <div class="primary-tag">
                        <a href="#" rel="category tag"><?=$pageCategory?></a>
                        <a href="#" rel="Author tag"><?=$author?></a>
                    </div>
                    <h2 class="title"><a
                            href="blog-single.php?id=<?= $postid ?>">
                            <?= $title?>
                        </a>
                    </h2>
                    <time class="date"
                        datetime="<?= htmlentities($datetime); ?>"><?= htmlentities($datetime); ?></time>
                    <div class="excerpt">
                        <p>
                            <?php
                             $excerpt = substr($post, 0, 320);
                        echo html_entity_decode($excerpt); ?>
                        </p>
                    </div>
                </div>
            </div>
        </div>
        <!-- endloop -->
        <?php endwhile ?>
    </div>
</div>
<!-- =========== End Main Container ============= -->

<?php require_once './partials/_footer.php';
