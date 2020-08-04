<?php 
include_once '../config.php'; 
//Delete Message
$deleteSql="DELETE FROM `message` WHERE `id`='$_GET[id]'";
$deleteQuery=mysqli_query($connection,$deleteSql);
header("location:listView.php");
?>