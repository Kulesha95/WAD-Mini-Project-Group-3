<?php 
include_once '../config.php';
include_once '../function.php';
//Get the uploaded image location
$path= uploadFile("img/Food", "image");
//Save Menu Item
$insertSql="INSERT INTO `menu_item` (`id`,`name`,`description`,`price`,`image`,`type`) VALUES(null,'$_POST[name]','$_POST[description]','$_POST[price]','$path','$_POST[type]')";
$insertQuery=mysqli_query($connection,$insertSql);
header("location:listView.php");
?>