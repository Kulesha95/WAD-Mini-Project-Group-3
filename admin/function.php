<?php

function feature($id){
    $featureSql="select * from feature";
    $featureResult=mysqli_query($GLOBALS['connection'],$featureSql);
    $featureData=mysqli_fetch_assoc($featureResult);
    return $featureData['name'];
}

function amenity($id){
    $amenitySql="select * from amenity";
    $amenityResult=mysqli_query($GLOBALS['connection'],$amenitySql);
    $amenityData=mysqli_fetch_assoc($amenityResult);
    return $amenityData['name'];
}
?>