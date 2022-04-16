<?php
session_start();
include('../partials/_db.php');
if (isset($_POST['amt']) && isset($_POST['name'])) {
    $monthly = $_POST['monthly'];
    $amt=$_POST['amt'];
    $name=$_POST['name'];
    $Company=$_POST['Company'];
    $mail=$_POST['mail'];
    $Mobile=$_POST['Mobile'];
    $Address=$_POST['Address'];
    $payment_status="Incomplete";
    $added_on=date('Y-m-d h:i:s');
    mysqli_query($conn, "INSERT INTO transactions(name, email, mob, adderss, company, amount, payment_status, addedOn, monthly) 
    VALUES 
    ('$name','$mail','$Mobile','$Address','$Company','$amt','$payment_status','$added_on','$monthly')");
    $_SESSION['OID']=mysqli_insert_id($conn);
}


if (isset($_POST['payment_id']) && isset($_SESSION['OID'])) {
    $payment_id=$_POST['payment_id'];
    mysqli_query($conn, "update transactions set payment_status='complete',payment_id='$payment_id' where id='".$_SESSION['OID']."'");
}
