<?php 
include_once '../config.php';
include_once '../function.php';

$profilepic=uploadFile("img/gallery","image");    
$updateSql="UPDATE `user` SET `first_name`='$_POST[first_name]',`last_name`='$_POST[last_name]',`username`='$_POST[username]',,`password`='$_POST[password]',`email`='$_POST[email]',`status`='$_POST[status]',`image`='$profilepic' WHERE `id`='$_POST[id]'";
$updateQuery=mysqli_query($connection,$updateSql);
header("location:listView.php");
?>