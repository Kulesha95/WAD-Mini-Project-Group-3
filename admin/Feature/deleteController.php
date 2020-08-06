<?php 
include_once '../config.php'; 
//   delete feature  
$deleteSql="DELETE FROM `feature` WHERE `id`='$_GET[id]'";
$deleteQuery=mysqli_query($connection,$deleteSql);
header("location:listView.php");
?>