<?php
include_once "../config.php";
include_once "../function.php";

// Get the settings record count
$groupCountSql = "SELECT distinct `group_code` FROM cms WHERE `group_code` LIKE '$_POST[group_code]%' AND `page`='$_POST[page]' GROUP BY `group_code`";
$groupCountResult = mysqli_query($connection, $groupCountSql);
// Genarate new group code
$groupCode = $_POST['group_code'] . (mysqli_num_rows($groupCountResult) + 1);
$key=$_POST['key'];
// Upload file and get the uploaded path
$value=uploadFile("img/Cms","image");

// Check whether the image setting is existing on the database
$cmsSql = "SELECT * FROM `cms` WHERE `page`='$_POST[page]' AND `key`='$key'";
$cmsResult = mysqli_query($connection, $cmsSql);
// If exist update the database
if ($cmsData = mysqli_fetch_assoc($cmsResult)) {
    $updateSql = "UPDATE `cms` SET `key`='$key',`value`='$value' WHERE `id`='$cmsData[id]'";
    $updateQuery = mysqli_query($connection, $updateSql);
// If not exist insert the setting in to the database 
} else {
    $insertSql = "INSERT INTO `cms` (`id`,`key`,`value`,`group_code`,`page`) VALUES(null,'$key','$value','$groupCode','$_POST[page]')";
    $insertQuery = mysqli_query($connection, $insertSql);
}
// Return back to the initial page
header("location:" . $_SERVER['HTTP_REFERER']);