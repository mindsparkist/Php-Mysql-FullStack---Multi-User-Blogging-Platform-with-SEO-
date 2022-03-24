<?php
require_once './partials/_db.php';
require_once './partials/_header.php';
?>
<!-- =========== Main Container ============= -->
<div class="main-content-area">
    <div class="container">
        <div class="single-post-wrap">
            <?php
            if (isset($_POST["searchbutton"])) {
                $search = $_POST['search'];
                $sql = "SELECT * FROM new_post WHERE 
                        datetime LIKE '%$search%' OR title LIKE '%$search%'
                        OR category LIKE '%$search%' OR author LIKE '%$search%' OR
                        post LIKE '%$search%'";
            } else {
                $postid1 = $_GET['id'];
                //echo $postid1;
                $sql ="SELECT * FROM new_post WHERE id='$postid1'";
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
            <div class="post-head d-flex has-image"
                style="background-image:url(./admin/<?= $image ?>);">
                <div class="header-inner align-self-center">
                    <div class="primary-tag">
                        <a href="#" rel="category tag">
                            <?= $category ?>
                        </a>
                    </div>
                    <h1 class="title">
                        <?= $title ?>
                    </h1>
                    <div class="post-meta">
                        <a href="#" class="author">
                            <span>
                                By
                            </span>
                            <?= $author ?>
                        </a>
                        <time class="date"
                            datetime="<?= $datetime ?>">
                            - <?= $datetime ?></time>
                    </div>
                </div>
            </div>
            <div class="post-content m-auto">
                <p>
                    <?= html_entity_decode($post) ?>
                </p>
            </div>
            <div class="share-wrap clearfix text-center">
                <div class="share-text h4">Share this article on:</div>
                <ul class="share-links">
                    <!-- facebook -->
                    <li>
                        <a class="facebook"
                            href="https://www.facebook.com/sharer/sharer.php?u=https://excellentdynamics.biz/demos/html/second-time-around/"
                            onclick="window.open(this.href, 'facebook-share','width=580,height=296');return false;"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M9 8h-3v4h3v12h5v-12h3.642l.358-4h-4v-1.667c0-.955.192-1.333 1.115-1.333h2.885v-5h-3.808c-3.596 0-5.192 1.583-5.192 4.615v3.385z">
                                </path>
                            </svg>Facebook</a>
                    </li>
                    <!-- twitter -->
                    <li>
                        <a class="twitter"
                            href="https://twitter.com/share?text=5+things+to+do+in+Meghalaya+%26%238211%3B+the+abode+of+clouds&amp;url=https://excellentdynamics.biz/demos/html/second-time-around/"
                            onclick="window.open(this.href, 'twitter-share', 'width=580,height=296');return false;"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M24 4.557c-.883.392-1.832.656-2.828.775 1.017-.609 1.798-1.574 2.165-2.724-.951.564-2.005.974-3.127 1.195-.897-.957-2.178-1.555-3.594-1.555-3.179 0-5.515 2.966-4.797 6.045-4.091-.205-7.719-2.165-10.148-5.144-1.29 2.213-.669 5.108 1.523 6.574-.806-.026-1.566-.247-2.229-.616-.054 2.281 1.581 4.415 3.949 4.89-.693.188-1.452.232-2.224.084.626 1.956 2.444 3.379 4.6 3.419-2.07 1.623-4.678 2.348-7.29 2.04 2.179 1.397 4.768 2.212 7.548 2.212 9.142 0 14.307-7.721 13.995-14.646.962-.695 1.797-1.562 2.457-2.549z">
                                </path>
                            </svg>Twitter</a>
                    </li>
                    <!-- linkedin -->
                    <li>
                        <a class="linkedin"
                            href="http://www.linkedin.com/shareArticle?mini=true&amp;url=https://excellentdynamics.biz/demos/html/second-time-around/&amp;title=5+things+to+do+in+Meghalaya+%26%238211%3B+the+abode+of+clouds"
                            onclick="window.open(this.href, 'linkedin-share', 'width=580,height=296');return false;"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M4.98 3.5c0 1.381-1.11 2.5-2.48 2.5s-2.48-1.119-2.48-2.5c0-1.38 1.11-2.5 2.48-2.5s2.48 1.12 2.48 2.5zm.02 4.5h-5v16h5v-16zm7.982 0h-4.968v16h4.969v-8.399c0-4.67 6.029-5.052 6.029 0v8.399h4.988v-10.131c0-7.88-8.922-7.593-11.018-3.714v-2.155z">
                                </path>
                            </svg>Limkedin</a>
                    </li>
                    <!-- pinterest -->
                    <li>
                        <a class="pinterest"
                            href="http://pinterest.com/pin/create/button/?url=https://excellentdynamics.biz/demos/html/second-time-around/&amp;description=5+things+to+do+in+Meghalaya+%26%238211%3B+the+abode+of+clouds"
                            onclick="window.open(this.href, 'linkedin-share', 'width=580,height=296');return false;"><svg
                                xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24">
                                <path
                                    d="M12 0c-6.627 0-12 5.372-12 12 0 5.084 3.163 9.426 7.627 11.174-.105-.949-.2-2.405.042-3.441.218-.937 1.407-5.965 1.407-5.965s-.359-.719-.359-1.782c0-1.668.967-2.914 2.171-2.914 1.023 0 1.518.769 1.518 1.69 0 1.029-.655 2.568-.994 3.995-.283 1.194.599 2.169 1.777 2.169 2.133 0 3.772-2.249 3.772-5.495 0-2.873-2.064-4.882-5.012-4.882-3.414 0-5.418 2.561-5.418 5.207 0 1.031.397 2.138.893 2.738.098.119.112.224.083.345l-.333 1.36c-.053.22-.174.267-.402.161-1.499-.698-2.436-2.889-2.436-4.649 0-3.785 2.75-7.262 7.929-7.262 4.163 0 7.398 2.967 7.398 6.931 0 4.136-2.607 7.464-6.227 7.464-1.216 0-2.359-.631-2.75-1.378l-.748 2.853c-.271 1.043-1.002 2.35-1.492 3.146 1.124.347 2.317.535 3.554.535 6.627 0 12-5.373 12-12 0-6.628-5.373-12-12-12z"
                                    fill-rule="evenodd" clip-rule="evenodd"></path>
                            </svg>Pinterest</a>
                    </li>
                </ul>
            </div>
            <?php
                    } ?>
        </div>
        <!-- Comment -->
        <div class="comment-container" id="comments">

            <!-- sql -->


            <div id="respond" class="comment-respond">
                <form
                    action="comment-post.php?id='<?= $_GET['id'] ?>'"
                    method="POST" id="commentform" class="comment-form">
                    <p class="comment-notes"><span id="email-notes">Your email address will not be published.</span>
                        Required fields are marked <span class="required">*</span></p>
                    <div> <label for="comment">Comment</label>
                        <textarea id="comment" name="comment" cols="45" rows="6" aria-required="true"></textarea>
                    </div>
                    <div class="row">
                        <div class="col-sm-4">
                            <div class="form-group comment-form-author">
                                <label for="author">Name
                                    <span class="required">*</span>
                                </label>
                                <input class="form-control" id="author" name="cauthor" type="text" value="" size="30"
                                    aria-required="true">
                            </div>
                        </div>
                        <div class="col-sm-4">
                            <div class="form-group comment-form-email">
                                <label for="email">Email <span class="required">*</span>
                                </label> <input class="form-control" id="email" name="cemail" type="email" value=""
                                    size="30" aria-required="true">
                            </div>
                        </div>
                    </div>
                    <p class="form-submit">
                        <button type="submit" id="submit" name="submitcomment"
                            class="btn btn-success hvr-overline-from-left">Submit
                            Comment</button>
                    </p>
                </form>
            </div><!-- #respond -->
        </div>
    </div>
</div><!-- =========== End Main Container ============= -->
<!-- =========== Footer ============= -->
<?php require_once './partials/_footer.php';
