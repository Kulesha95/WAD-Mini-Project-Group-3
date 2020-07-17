<?php 
include_once '../config.php'; 
    
$updateSql="UPDATE `feature` SET `feature`='$_POST[feature]',`type`='$_POST[type]',`icon`='$_POST[icon]' WHERE `id`='$_POST[id]'";
$updateQuery=mysqli_query($connection,$updateSql);
header("location:listView.php");
?>