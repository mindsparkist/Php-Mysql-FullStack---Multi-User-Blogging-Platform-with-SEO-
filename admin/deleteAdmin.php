<?php
require_once './partials/db.php';

if (isset($_GET['id'])) {
    $queryparam = $_GET['id'];
    $sql = "DELETE FROM comment WHERE id = '$queryparam'";
      
    if ($conn->query($sql) === true) {
        header("Location: admin-comments.php");
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }
} ?>

