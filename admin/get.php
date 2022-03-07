<?php
$server = 'localhost';
$username = 'root';
$password = '';
$db = 'php-blog';

$conn = mysqli_connect($server, $username, $password, $db);

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}


$sql = "SELECT * FROM contact";
$result = mysqli_query($conn, $sql);
 
// add all records to an array

$rows=array();
while ($row=mysqli_fetch_array($result)) {
    $rows[]=$row;
}

echo json_encode($rows);
