<?php 
include_once '../config.php'; 
//Delete Menu Item
$deleteSql="DELETE FROM `Menu_item` WHERE `id`='$_GET[id]'";
$deleteQuery=mysqli_query($connection,$deleteSql);
header("location:listView.php");
?>