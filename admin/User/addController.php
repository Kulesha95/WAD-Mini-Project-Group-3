<?php 
include_once '../config.php';
include_once '../function.php';

$profilepic=uploadFile("img/User","image");
$insertSql="INSERT INTO `user` (`id`,`first_name`,`last_name`,`username`,`password`,`email`,`status`,`image`) VALUES(null,'$_POST[first_name]','$_POST[last_name]','$_POST[username]','$_POST[password]','$_POST[email]','1','$profilepic')";
$insertQuery=mysqli_query($connection,$insertSql);
header("location:../index.php");
?>