<?php
include_once "../config.php";
$selectQuery="SELECT * FROM `cms` WHERE `id`='$_GET[id]'";
$selectResult=mysqli_query($connection,$selectQuery);
$selectData=mysqli_fetch_assoc($selectResult);
$deleteSql = "DELETE FROM `cms` WHERE `group_code`='$selectData[group_code]'";
$deleteQuery = mysqli_query($connection, $deleteSql);
header("location:".$_SERVER['HTTP_REFERER']);