<?php 
include_once '../config.php'; 
    
$updateSql="UPDATE `firstName` SET `firstName`='$_POST[firstName]',`lastName`='$_POST[lastName]',`userName`='$_POST[userName]',,`pass`='$_POST[pass]',`email`='$_POST[email]',`imageU`='$_POST[imageU]' WHERE `id`='$_POST[id]'";
$updateQuery=mysqli_query($connection,$updateSql);
header("location:listView.php");
?>