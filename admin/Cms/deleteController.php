<?php
include_once "../config.php";
// Find the group code of the selected setting
$selectQuery="SELECT * FROM `cms` WHERE `id`='$_GET[id]'";
$selectResult=mysqli_query($connection,$selectQuery);
$selectData=mysqli_fetch_assoc($selectResult);
// Delete all settings under searched group code
$deleteSql = "DELETE FROM `cms` WHERE `group_code`='$selectData[group_code]'";
$deleteQuery = mysqli_query($connection, $deleteSql);
// Return back to the initial page
header("location:".$_SERVER['HTTP_REFERER']);