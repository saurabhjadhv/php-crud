<?php

include "conn.php";
$id2 = $_GET['id'];
$q2 = "DELETE FROM `crud_ops` WHERE id ='$id2'";
$r1 = mysqli_query($conn, $q2);
if ($r1) {
    header("Location:display.php");
    die;
}

?>