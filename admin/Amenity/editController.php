<?php 
include_once '../config.php'; 
    
$updateSql="UPDATE `amenity` SET `amenity`='$_POST[amenity]',`type`='$_POST[type]',`icon`='$_POST[icon]' WHERE `id`='$_POST[id]'";
$updateQuery=mysqli_query($connection,$updateSql);
header("location:listView.php");
?>