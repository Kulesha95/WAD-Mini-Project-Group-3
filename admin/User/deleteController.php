<?php 
include_once '../config.php'; 
    
$deleteSql="DELETE FROM `user` WHERE `id`='$_GET[id]'";
$deleteQuery=mysqli_query($connection,$deleteSql);
header("location:listView.php");
?>