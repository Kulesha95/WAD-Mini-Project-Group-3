<?php 
include_once '../config.php'; 
//delete data from gallery    
$deleteSql="DELETE FROM `gallery_image` WHERE `id`='$_GET[id]'";
$deleteQuery=mysqli_query($connection,$deleteSql);
header("location:listView.php");
?>