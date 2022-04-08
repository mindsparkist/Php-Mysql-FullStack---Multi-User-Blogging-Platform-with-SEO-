<?php
 require_once './partials/_db.php';

 $search_value = $_POST["search"];

    $sql = "SELECT * FROM new_post
     WHERE title LIKE '%$search_value%' 
     OR post LIKE '%$search_value%'";

$result = mysqli_query($conn, $sql) or die("Error in Selecting " . mysqli_error($conn));
$outpur = '';
if (mysqli_num_rows($result) > 0) {
    while ($rows = mysqli_fetch_assoc($result)) {
        $outpur .= '<div class="col-lg-6 small-post post-wrap">
        <a href="blog-single.php?id=' . $rows['id'] . '">
            <div class="featured-image-wrap">
                <img src="./admin/' . $rows['image'] . '" alt="' . $rows['title'] . '" class="img-thumbnail">
            </div>
        <a>
         <div class="content-wrap">
        <div class="tag">
            <a href="#" rel="category tag">' . $rows['category'] . '</a>
        </div>
           <h2 class="title h4">
                <a href="blog-single.php?id=' . $rows['id'] . '">' . $rows['title'] . '</a>
            </h2>
            <time class="date" datetime=" ' . $rows['datetime'] . '">
               ' . $rows['datetime'] . '
            </time>
        </div>
    </div>';
    }

    echo $outpur;
} else {
    $outpur .= '<h1>No Result Found</h1>';
}
