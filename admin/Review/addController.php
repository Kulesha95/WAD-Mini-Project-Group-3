<?php
include_once '../config.php';
$date= date("Y-m-d");
$time= date("H:i:s");

$insertSql = "INSERT INTO `message` (`id`,`rate`,`review`,`date`,`time`,`user_id`) VALUES(null,'$_POST[rate]','$_POST[review]','$date','$time','$_POST[user_id]')";
$insertQuery=mysqli_query($connection,$insertSql);
header("location:../../contact.php");




?>