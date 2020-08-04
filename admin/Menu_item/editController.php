<?php 
include_once '../config.php'; 
include_once '../function.php'; 

//Get the uploaded image location if image was submitted
if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
    $path=uploadFile("img/gallery","image");    
    $updateCode=",`image`='$path'";
}else{
    $updateCode="";
}   
//Edit Menu Item
$updateSql="UPDATE `Menu_item` SET `name`='$_POST[name]',`description`='$_POST[description]',`price`='$_POST[price]', `type`='$_POST[type]'$updateCode WHERE `id`='$_POST[id]'";
$updateQuery=mysqli_query($connection,$updateSql);
header("location:listView.php");
?>