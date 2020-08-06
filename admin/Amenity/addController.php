<?php 
include_once '../config.php';
// add amenity
$insertSql="INSERT INTO `amenity` (`id`,`amenity`,`type`,`icon`) VALUES(null,'$_POST[amenity]','$_POST[type]','$_POST[icon]')";
$insertQuery=mysqli_query($connection,$insertSql);
header("location:listView.php");
?>