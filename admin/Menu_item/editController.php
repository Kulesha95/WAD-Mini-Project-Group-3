<?php 
include_once '../config.php'; 
    
$updateSql="UPDATE `Menu_item` SET `name`='$_POST[name]',`description`='$_POST[description]',`price`='$_POST[price]', `image`='$_POST[image]', `type`='$_POST[type]' WHERE `id`='$_POST[id]'";
$updateQuery=mysqli_query($connection,$updateSql);
header("location:listView.php");
?>