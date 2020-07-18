<?php 
include_once '../config.php'; 
    
$updateStaffSql="UPDATE `staff` SET `title`='$_POST[title]',`first_name`='$_POST[first_name]',`last_name`='$_POST[last_name]', `designation`='$_POST[designation]', `email`='$_POST[email]', `mobile`='$_POST[mobile]', `direct`='$_POST[direct]', `type`='$_POST[type]' WHERE `id`='$_POST[id]'";
$updateStaffQuery=mysqli_query($connection,$updateStaffSql);
header("location:listView.php");
?>