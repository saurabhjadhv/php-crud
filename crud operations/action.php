<?php

include "conn.php";
if (isset($_POST['update'])) {
    $sid = $_POST['sid'];
    $name = $_POST['name'];
    $email = $_POST['email'];
    $phone = $_POST['phone'];
    $password = $_POST['password'];
    $q = "update  crud_ops set name='$name',email='$email',phone='$phone',password='$password' where id='$sid'";
    $r = mysqli_query($conn, $q);
    header("Location:display.php");
    die;
}

?>