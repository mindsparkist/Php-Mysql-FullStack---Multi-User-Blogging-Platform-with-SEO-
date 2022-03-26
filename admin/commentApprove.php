<?php
require_once './partials/db.php';

if (isset($_GET['uid'])) {
    $queryparam = $_GET['uid'];
    $sql = "UPDATE comment SET status = 'ON' WHERE id = '$queryparam'";
      
    if ($conn->query($sql) === true) {
        header("Location: admin-comments.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}

if (isset($_GET['cid'])) {
    $queryparam = $_GET['cid'];
    $sql = "UPDATE comment SET status = 'OFF' WHERE id = '$queryparam'";
      
    if ($conn->query($sql) === true) {
        header("Location: admin-comments.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
}
