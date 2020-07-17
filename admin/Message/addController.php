<?php
include_once '../config.php';

$insertSql = "INSERT INTO `message` (`id`,`name`,`email`,`subject`,`message`,`user_id`) VALUES(null,'$_POST[name]','$_POST[email]','$_POST[message]','$_POST[user_id]')";
$insertQuery=mysqli_query($connection,$insertSql);
header("location:../../contact.php");




?>