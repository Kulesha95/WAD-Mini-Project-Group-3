<?php 
include_once '../config.php';

$insertSql="INSERT INTO `cms` (`id`,`key`,`value`,`group_code`,`page`) VALUES(null,'$_POST[key]','$_POST[value]','$_POST[group_code]','$_POST[page]')";
$insertQuery=mysqli_query($connection,$insertSql);
header("location:listView.php");
?>