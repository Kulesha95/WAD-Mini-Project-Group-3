<?php 
include_once '../config.php';
include_once '../function.php';
//edit user info
if (isset($_FILES['image']) && $_FILES['image']['size'] > 0) {
    $profilepic=uploadFile("img/User","image");    
    $updateCode=",`image`='$profilepic'";
}else{
    $updateCode="";
}
$updateSql="UPDATE `user` SET `first_name`='$_POST[first_name]',`last_name`='$_POST[last_name]',`username`='$_POST[username]',`password`='$_POST[password]',`email`='$_POST[email]' $updateCode WHERE `id`='$_POST[id]'";
$updateQuery=mysqli_query($connection,$updateSql);
header("location:listView.php");
?>