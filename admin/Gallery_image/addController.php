<?php 
include_once '../config.php';
include_once '../function.php';

$profilepic=uploadFile("img/gallery","path");
$insertSql="INSERT INTO `gallery_image` (`id`,`path`,`type`,`locatin_name`,`description`) VALUES(null,'$profilepic','$_POST[type]','$_POST[locatin_name]','$_POST[description]')";
$insertQuery=mysqli_query($connection,$insertSql);
header("location:listView.php");
?>