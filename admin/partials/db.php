<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'php-blog';

$conn = mysqli_connect($server,$username,$password,$db);

if($conn === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>
