<?php 
include_once '../config.php'; 
include_once '../function.php'; 

//Get the uploaded image location
$path= uploadFile("img/Food", "image");    
//Edit Menu Item
$updateSql="UPDATE `Menu_item` SET `name`='$_POST[name]',`description`='$_POST[description]',`price`='$_POST[price]', `image`='$path', `type`='$_POST[type]' WHERE `id`='$_POST[id]'";
$updateQuery=mysqli_query($connection,$updateSql);
header("location:listView.php");
?>