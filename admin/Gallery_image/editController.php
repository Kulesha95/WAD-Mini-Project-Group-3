<?php 
include_once '../config.php';
include_once '../function.php';

$profilepic=uploadFile("img/gallery","path");    
$updateSql="UPDATE `gallery_image` SET `path`='$profilepic',`type`='$_POST[type]',`locatin_name`='$_POST[locatin_name]',,`description`='$_POST[description]' WHERE `id`='$_POST[id]'";
$updateQuery=mysqli_query($connection,$updateSql);
header("location:listView.php");
?>