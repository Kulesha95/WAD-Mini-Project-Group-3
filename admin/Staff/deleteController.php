<?php 
include_once '../config.php'; 
    
$deleteStaffSql="DELETE FROM `staff` WHERE `id`='$_GET[id]'";
$deleteStaffQuery=mysqli_query($connection,$deleteStaffSql);
header("location:listView.php");
?>