<?php
session_start();
include_once '../config.php';
// If the user loged in save the logged in user
if(isset($_SESSION['user_id'])){
    $user="'$_POST[user_id]'";
// If not user logged in save as guest user
}else{
    $user="null";
}

// Save the contact message in to database
$insertSql = "INSERT INTO `message` (`id`,`name`,`email`,`subject`,`message`,`user_id`) VALUES(null,'$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]',$user)";
$insertQuery=mysqli_query($connection,$insertSql);
header("location:../../contact.php");
?>