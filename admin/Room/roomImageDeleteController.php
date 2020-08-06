<?php 
include_once '../config.php'; 
//  delete room image   
$deleteSql="DELETE FROM `room_image` WHERE `id`='$_GET[id]'";
$deleteQuery=mysqli_query($connection,$deleteSql);
header("location:roomImageView.php?id=".$_GET['roomId']);
?>