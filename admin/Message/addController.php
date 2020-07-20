<?php
session_start();
include_once '../config.php';
if(isset($_SESSION['user_id'])){
    $user="'$_POST[user_id]'";
}else{
    $user="null";

}

$insertSql = "INSERT INTO `message` (`id`,`name`,`email`,`subject`,`message`,`user_id`) VALUES(null,'$_POST[name]','$_POST[email]','$_POST[subject]','$_POST[message]',$user)";
$insertQuery=mysqli_query($connection,$insertSql);
header("location:../../contact.php");




?>