<?php 
include_once '../config.php';

$insertSql="INSERT INTO `menu_item` (`id`,`name`,`description`,`price`,`image`,`type`) VALUES(null,'$_POST[name]','$_POST[description]','$_POST[price]','$_POST[image]','$_POST[type]')";
$insertQuery=mysqli_query($connection,$insertSql);
header("location:listView.php");
?>