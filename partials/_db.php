<?php
$server = 'localhost';
$username = 'shuv';
$password = '123';
$db = 'php-blog';

$conn = mysqli_connect($server, $username, $password, $db);

if ($conn === false) {
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
