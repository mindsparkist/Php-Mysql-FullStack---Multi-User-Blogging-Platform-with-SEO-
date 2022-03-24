<?php
require_once './partials/_db.php';
require_once './partials/_db.php';
$missing = false;

if (isset($_POST['submitcomment'])) {
    $pageid = $_GET['id'];
    $pageid = str_replace("'", '', $pageid);
    date_default_timezone_set("Asia/Kolkata");
    $datetime = date('d/m/Y h:i:s a', time());
    $comment=htmlspecialchars(stripslashes(trim($_POST['comment'])));
    $commentAuthor=htmlspecialchars(stripslashes(trim($_POST['cauthor'])));
    $commentEmail=htmlspecialchars(stripslashes(trim($_POST['cemail'])));

    if (empty($comment)||empty($commentAuthor)||empty($commentEmail)) {
        $missing = true;
    }
    if ($missing == false) {
        $sql="INSERT INTO comment
(datetime, comment, commentauth, commentmail, status,post_id)
VALUES
('$datetime','$comment','$commentAuthor','$commentEmail','OFF','$pageid')";
        if ($conn->query($sql) === true) {
            $sql_success = true;
            header("Location:blog-single.php?id=$pageid");
        } else {
            $sql_unsuccess = true;
            echo "Error: " . $sql . "<br>" . $conn->error;
        }
    }
}
