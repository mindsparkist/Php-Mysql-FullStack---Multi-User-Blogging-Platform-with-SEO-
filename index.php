<?php require_once './partials/_db.php'; ?>
<?php require_once './partials/_header.php'; ?>
<!-- =========== Main Container ============= -->
<div class="main-content-area">
    <div class="featured-posts-section">
        <div class="container">
            <div class="row clearfix">
                <div class="col-lg-6 large-post post-wrap">
                    <?php
                        $sql ="SELECT * FROM `new_post`;";
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
                        echo htmlentities($excerpt); ?>
                        </p>
                    </div>
                    <?php
                    } ?>
                </div>
                <div class="col-lg-6 small-post post-wrap">
                    <a href="blog-single.html">
                        <div class="featured-image-wrap">
                            <div class="featured-image" style="background-image:url(img/2020-fifa.jpg);"></div>
                        </div>
                    </a>
                    <div class="content-wrap">
                        <div class="tag"><a href="#" rel="category tag">Sports</a></div>
                        <h2 class="title h4"><a href="blog-single.html">How 2022 FIFA WC host Quatar preparing them
                                self</a></h2>
                        <time class="date" datetime="2019-04-20">April 20, 2019</time>
                    </div>
                </div>
                <div class="col-lg-6 small-post post-wrap">
                    <a href="blog-single.html">
                        <div class="featured-image-wrap">
                            <div class="featured-image" style="background-image:url(img/yoga-20minutes.jpg);"></div>
                        </div>
                    </a>
                    <div class="content-wrap">
                        <div class="tag"><a href="#" rel="category tag">Health</a></div>
                        <h2 class="title h4"><a href="blog-single.html">Only 20 minute daily yoga will improve the
                                lifestyle more than 60%</a></h2>
                        <time class="date" datetime="2019-04-20">April 20, 2019</time>
                    </div>
                </div>
                <div class="col-lg-6 small-post post-wrap">
                    <a href="blog-single.html">
                        <div class="featured-image-wrap">
                            <div class="featured-image" style="background-image:url(img/easy-breakfast.jpg);"></div>
                        </div>
                    </a>
                    <div class="content-wrap">
                        <div class="tag"><a href="#" rel="category tag">Food</a></div>
                        <h2 class="title h4"><a href="blog-single.html">Easy breakfast recipe healthy pancake</a>
                        </h2>
                        <time class="date" datetime="2019-04-20">April 20, 2019</time>
                    </div>
                </div>
                <div class="col-lg-6 small-post post-wrap">
                    <a href="blog-single.html">
                        <div class="featured-image-wrap">
                            <div class="featured-image" style="background-image:url(img/travelling.jpg);"></div>
                        </div>
                    </a>
                    <div class="content-wrap">
                        <div class="tag"><a href="#" rel="category tag">Travel</a></div>
                        <h2 class="title h4"><a href="blog-single.html">Travelling is all about the journey not the
                                destination</a></h2>
                        <time class="date" datetime="2019-04-20">April 20, 2019</time>
                    </div>
                </div>
            </div>
        </div>
    </div>

</div><!-- =========== End Main Container ============= -->
<?php require_once './partials/_footer.php';
