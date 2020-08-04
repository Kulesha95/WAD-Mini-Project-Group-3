<?php
include_once "../config.php";

// Get the last group code
$groupCountSql = "SELECT distinct `group_code` FROM cms WHERE `group_code` LIKE '$_POST[group_code]%' AND `page`='$_POST[page]' ORDER BY `group_code` DESC LIMIT 1";
$groupCountResult = mysqli_query($connection, $groupCountSql);
$groupCountData=mysqli_fetch_assoc($groupCountResult);
// Separate the last group code number
$last=explode($_POST['group_code'],$groupCountData['group_code']);
// Generate the next group code
$groupCode = $_POST['group_code'] . ($last[1] + 1);
// Iterate trough all inputs
foreach ($_POST as $key => $value) {
    // Escape unwanted inputs to save
    if ($key == "page" || $key == "type" || $key == "group_code" || $key == "Save") {
        continue;
    // Check the settings save mode
    } else if ($_POST['type'] == "single") {
        // If mode is single search for existing setting in the database
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
    // If mode is multiple save the setting without update existing
    } else {
        $insertSql = "INSERT INTO `cms` (`id`,`key`,`value`,`group_code`,`page`) VALUES(null,'$key','$value','$groupCode','$_POST[page]')";
        $insertQuery = mysqli_query($connection, $insertSql);
    }
}
// Return back to the initial page
header("location:".$_SERVER['HTTP_REFERER']);