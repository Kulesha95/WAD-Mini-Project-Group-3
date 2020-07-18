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
?>