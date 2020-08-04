<?php

// Find the feature related to the id and return its name
function feature($id){
    $featureSql="select * from feature where id= '$id'";
    $featureResult=mysqli_query($GLOBALS['connection'],$featureSql);
    $featureData=mysqli_fetch_assoc($featureResult);
    return $featureData['name'];
}

// Find the amenity related to the id and return its name
function amenity($id){
    $amenitySql="select * from amenity where id= '$id'";
    $amenityResult=mysqli_query($GLOBALS['connection'],$amenitySql);
    $amenityData=mysqli_fetch_assoc($amenityResult);
    return $amenityData['name'];
}

// Find the room related to the id and return its name
function room($id){
    $roomSql="select * from room where id= '$id'";
    $roomResult=mysqli_query($GLOBALS['connection'],$roomSql);
    $roomData=mysqli_fetch_assoc($roomResult);
    return $roomData['name'];
}

// Find the user related to the id and return his full name. If user not found return him as a guest user
function user($id){
    $userSql="select * from user where id= '$id'";
    $userResult=mysqli_query($GLOBALS['connection'],$userSql);
    if($userData=mysqli_fetch_assoc($userResult)){
        return $userData['first_name']." ".$userData['last_name'];
    }else{
        return "Guest";
    }
}

// Find the user related to the id and return his profile picture. If user not found return empty string
function userImage($id){
    $userSql="select * from user where id= '$id'";
    $userResult=mysqli_query($GLOBALS['connection'],$userSql);
    if($userData=mysqli_fetch_assoc($userResult)){
        return $userData['image'];
    }else{
        return "";
    }
}

// File upload function
function uploadFile($path, $inputName)
{
    // Genarate the file upload directory path
    $path = "../../" . $path . "/";
    // Get the uploaded file details
    $fileName = pathinfo(basename($_FILES[$inputName]["name"]));
    // Genarate the new file name. Used timestamp to avoid caching issues
    $newName = str_replace(" ", "", $path . $fileName['filename'] . "" . date("Ymd") . date("his") . "." . $fileName['extension']);

    // Check whether the directory is exist. If not create that directory
    if (!file_exists($path)) {
        mkdir($path, 0777, true);
    }
    // Move the file in to the directory
    move_uploaded_file($_FILES[$inputName]["tmp_name"], $newName);
    // Return the uploaded file path
    return str_replace("../../", "", $newName);
}

// CMS data retriew function for single save mode settings
function cmsGetSingle($key, $page)
{
    // Search the data accodrding to the key and the page
    $cmsSql = "SELECT * FROM `cms` WHERE `page`='$page' AND `key`='$key'";
    $cmsQuery = mysqli_query($GLOBALS['connection'], $cmsSql);
    // Return the value of the setting if exist
    if ($cmsData = mysqli_fetch_assoc($cmsQuery)) {
        return $cmsData['value'];
    // IF not exist return empty string
    } else {
        return "";
    }
}

// CMS data row id retriew function for single save mode settings
function cmsGetSingleId($key, $page)
{
    // Search the data accodrding to the key and the page
    $cmsSql = "SELECT * FROM `cms` WHERE `page`='$page' AND `key`='$key'";
    $cmsQuery = mysqli_query($GLOBALS['connection'], $cmsSql);
    // Return the row id of the setting if exist
    if ($cmsData = mysqli_fetch_assoc($cmsQuery)) {
        return $cmsData['id'];
    // IF not exist return empty string
    } else {
        return "";
    }
}

// CMS data group_codes retriew function for multiple save mode settings
function cmsGroupCodes($key, $page)
{
    // Create empty array for store group codes list
    $groupCodes = array();
    // Search all group codes relevent to the given key and the page
    $cmsSql = "SELECT distinct `group_code` FROM `cms` WHERE `page`='$page' AND `key`='$key'";
    $cmsQuery = mysqli_query($GLOBALS['connection'], $cmsSql);
    // Add the group code in to the list
    while ($cmsData = mysqli_fetch_assoc($cmsQuery)) {
        array_push($groupCodes, $cmsData['group_code']);
    }
    // Return the group codes list
    return $groupCodes;
}

// CMS data retriew function for multiple save mode settings. This uses above retreived group codes, page and key
function cmsGetMultiple($key, $page, $groupCode)
{    
    // Search the data accodrding to the key, group code and the page
    $cmsSql = "SELECT * FROM `cms` WHERE `page`='$page' AND `key`='$key' AND `group_code`='$groupCode'";
    $cmsQuery = mysqli_query($GLOBALS['connection'], $cmsSql);
    // Return the value of the setting if exist
    if ($cmsData = mysqli_fetch_assoc($cmsQuery)) {
        return $cmsData['value'];
    // IF not exist return empty string
    } else {
        return "";
    }
}

// CMS row id retriew function for multiple save mode settings. This uses above retreived group codes, page and key
function cmsGetMultipleId($key, $page, $groupCode)
{
    // Search the data accodrding to the key, group code and the page
    $cmsSql = "SELECT * FROM `cms` WHERE `page`='$page' AND `key`='$key' AND `group_code`='$groupCode'";
    $cmsQuery = mysqli_query($GLOBALS['connection'], $cmsSql);
    // Return the rw id of the setting if exist
    if ($cmsData = mysqli_fetch_assoc($cmsQuery)) {
        return $cmsData['id'];
    // IF not exist return empty string
    } else {
        return "";
    }
}