<?php 
include_once '../config.php';
include_once '../function.php';
$path= uploadFile("img/Room", "image");

$insertSql="INSERT INTO `room_image` (`id`,`path`,`thumbnail`,`room_id`) VALUES(null,'$path','0','$_POST[id]')";
$insertQuery=mysqli_query($connection,$insertSql);
$id=mysqli_insert_id($connection);
header("location:roomImageView.php?id=".$_POST['id']);
?>