<?php 
include_once '../config.php';
include_once '../function.php';

if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
    $path= uploadFile("img/Room", "image");

    $insertSql="INSERT INTO `room_image` (`id`,`path`,`thumbnail`,`room_id`) VALUES(null,'$path','0','$_POST[id]')";
    $insertQuery=mysqli_query($connection, $insertSql);
    $id=mysqli_insert_id($connection);
}
header("location:roomImageView.php?id=".$_POST['id']);
?>