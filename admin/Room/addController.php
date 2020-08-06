<?php 
include_once '../config.php';
// add room
$insertSql="INSERT INTO `room` (`id`,`name`,`description`,`size`,`bed_type`,`ideal_for`,`view`,`inter_connections`) VALUES(null,'$_POST[name]','$_POST[description]','$_POST[size]','$_POST[bed_type]','$_POST[ideal_for]','$_POST[view]','$_POST[inter_connections]')";
$insertQuery=mysqli_query($connection,$insertSql);
$id=mysqli_insert_id($connection);
header("location:roomAmenityView.php?id=".$id);
?>