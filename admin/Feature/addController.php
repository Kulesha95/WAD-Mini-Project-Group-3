<?php 
include_once '../config.php';
// add feature
$insertSql="INSERT INTO `feature` (`id`,`feature`,`type`,`icon`) VALUES(null,'$_POST[feature]','$_POST[type]','$_POST[icon]')";
$insertQuery=mysqli_query($connection,$insertSql);
header("location:listView.php");
?>