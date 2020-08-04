<?php 
include_once '../config.php';
include_once '../function.php';
if (isset($_FILES['path']) && $_FILES['path']['size'] > 0) {
    $path=uploadFile("img/gallery","path");    
    $updateCode=",`path`='$path'";
}else{
    $updateCode="";
}
$updateSql="UPDATE `gallery_image` SET `type`='$_POST[type]',`location_name`='$_POST[locatin_name]',,`description`='$_POST[description]'$updateCode WHERE `id`='$_POST[id]'";
$updateQuery=mysqli_query($connection,$updateSql);
header("location:listView.php");
?>