<?php

function feature($id){
    $featureSql="select * from feature where id= '$id'";
    $featureResult=mysqli_query($GLOBALS['connection'],$featureSql);
    $featureData=mysqli_fetch_assoc($featureResult);
    return $featureData['name'];
}

function amenity($id){
    $amenitySql="select * from amenity where id= '$id'";
    $amenityResult=mysqli_query($GLOBALS['connection'],$amenitySql);
    $amenityData=mysqli_fetch_assoc($amenityResult);
    return $amenityData['name'];
}

function room($id){
    $roomSql="select * from room where id= '$id'";
    $roomResult=mysqli_query($GLOBALS['connection'],$roomSql);
    $roomData=mysqli_fetch_assoc($roomResult);
    return $roomData['name'];
}

function user($id){
    $userSql="select * from user where id= '$id'";
    $userResult=mysqli_query($GLOBALS['connection'],$userSql);
    $userData=mysqli_fetch_assoc($userResult);
    if($userData=mysqli_fetch_assoc($userResult)){
        return $userData['name'];
    }else{
        return "Guest";
    }
    return $userData['name'];
}

function uploadFile($path, $inputName)
{
    $path = "../../" . $path . "/";
    $fileName = pathinfo(basename($_FILES[$inputName]["name"]));
    $newName = str_replace(" ", "", $path . $fileName['filename'] . "" . date("Ymd") . date("his") . "." . $fileName['extension']);

    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
    move_uploaded_file($_FILES[$inputName]["tmp_name"], $newName);
    return str_replace("../../", "", $newName);
}
function cmsGetSingle($key, $page)
{
    $cmsSql = "SELECT * FROM `cms` WHERE `page`='$page' AND `key`='$key'";
    $cmsQuery = mysqli_query($GLOBALS['connection'], $cmsSql);
    if ($cmsData = mysqli_fetch_assoc($cmsQuery)) {
        return $cmsData['value'];
    } else {
        return "";
    }
}

function cmsGroupCodes($key, $page)
{
    $groupCodes = array();
    $cmsSql = "SELECT distinct `group_code` FROM `cms` WHERE `page`='$page' AND `key`='$key'";
    $cmsQuery = mysqli_query($GLOBALS['connection'], $cmsSql);
    while ($cmsData = mysqli_fetch_assoc($cmsQuery)) {
        array_push($groupCodes, $cmsData['group_code']);
    }
    return $groupCodes;
}

function cmsGetMultiple($key, $page, $groupCode)
{
    $cmsSql = "SELECT * FROM `cms` WHERE `page`='$page' AND `key`='$key' AND `group_code`='$groupCode'";
    $cmsQuery = mysqli_query($GLOBALS['connection'], $cmsSql);
    if ($cmsData = mysqli_fetch_assoc($cmsQuery)) {
        return $cmsData['value'];
    } else {
        return "";
    }
}
?>