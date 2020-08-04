<?php 
include_once '../config.php';

$sql="INSERT INTO `staff` (`id`,`title`,`first_name`,`last_name`,`designation`,`email`,`mobile`,`direct`,`type`) VALUES(null,'$_POST[title]','$_POST[first_name]','$_POST[last_name]','$_POST[designation]','$_POST[email]','$_POST[mobile]','$_POST[direct]','$_POST[type]')";
$result=mysqli_query($connection,$sql);
header("location:listView.php");
?>