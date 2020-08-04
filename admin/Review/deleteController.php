<?php 
include_once '../config.php'; 
//Delete Review
$deleteSql="DELETE FROM `review` WHERE `id`='$_GET[id]'";
$deleteQuery=mysqli_query($connection,$deleteSql);
header("location:listView.php");
?>