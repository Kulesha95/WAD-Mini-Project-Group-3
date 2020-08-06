<?php 
include_once '../config.php'; 
//   update room  
$updateSql="UPDATE `room` SET `name`='$_POST[name]',`description`='$_POST[description]',`size`='$_POST[size]',`bed_type`='$_POST[bed_type]',`ideal_for`='$_POST[ideal_for]',`view`='$_POST[view]',`inter_connections`='$_POST[inter_connections]' WHERE `id`='$_POST[id]'";
$updateQuery=mysqli_query($connection,$updateSql);
header("location:roomAmenityView.php?id=".$_POST['id']);
?>