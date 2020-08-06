<?php 
include_once '../config.php'; 
// delete amenity
$deleteSql="DELETE FROM `amenity` WHERE `id`='$_GET[id]'";
$deleteQuery=mysqli_query($connection,$deleteSql);
header("location:listView.php");
?>