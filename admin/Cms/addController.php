<?php
include_once "../config.php";
$groupCountSql = "SELECT distinct `group_code` FROM cms WHERE `group_code` LIKE '$_POST[group_code]%' AND `page`='$_POST[page]' GROUP BY `group_code`";
$groupCountResult = mysqli_query($connection, $groupCountSql);
$groupCode = $_POST['group_code'] . (mysqli_num_rows($groupCountResult) + 1);
foreach ($_POST as $key => $value) {
    if ($key == "page" || $key == "type" || $key == "group_code") {
        continue;
    } else if ($_POST['type'] == "single") {
        $cmsSql = "SELECT * FROM `cms` WHERE `page`='$_POST[page]' AND `key`='$key'";
        $cmsResult = mysqli_query($connection, $cmsSql);
        if ($cmsData = mysqli_fetch_assoc($cmsResult)) {
            $updateSql = "UPDATE `cms` SET `key`='$key',`value`='$value' WHERE `id`='$cmsData[id]'";
            $updateQuery = mysqli_query($connection, $updateSql);
        } else {
            $insertSql = "INSERT INTO `cms` (`id`,`key`,`value`,`group_code`,`page`) VALUES(null,'$key','$value','$groupCode','$_POST[page]')";
            $insertQuery = mysqli_query($connection, $insertSql);
        }
    } else {
        $insertSql = "INSERT INTO `cms` (`id`,`key`,`value`,`group_code`,`page`) VALUES(null,'$key','$value','$groupCode','$_POST[page]')";
        $insertQuery = mysqli_query($connection, $insertSql);
    }
}
header("location:".$_SERVER['HTTP_REFERER']);