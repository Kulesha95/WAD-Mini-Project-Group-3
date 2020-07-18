<?php

    include_once "../config.php";

     $featureSql="select * from feature";
    $featureResult=mysqli_query($connection,$featureSql);
    while($featureData=mysqli_fetch_assoc($featureResult)){
        if(isset($_POST['feature'.$featureData['id']])){
             $roomfeatureSql="select * from room_has_feature WHERE feature_id='$featureData[id]'and room_id='$_POST[id]'";
            $roomfeatureResult=mysqli_query($connection,$roomfeatureSql);
            if(!($roomfeatureData=mysqli_fetch_assoc($roomfeatureResult))){
                 $insertSql="INSERT INTO room_has_feature(room_id,feature_id) VALUES ('$_POST[id]','$featureData[id]')";
                $insertQuery=mysqli_query($connection,$insertSql);
            }
        }else{
             $roomfeatureSql="select * from room_has_feature WHERE feature_id='$featureData[id]'and room_id='$_POST[id]'";
            $roomfeatureResult=mysqli_query($connection,$roomfeatureSql);
            if($roomfeatureData=mysqli_fetch_assoc($roomfeatureResult)){
                 $deleteSql="DELETE FROM room_has_feature WHERE feature_id='$featureData[id]'and room_id='$_POST[id]'";
                $deleteQuery=mysqli_query($connection,$deleteSql);
            }
        }
    }
    header("location:listView.php?id=".$_POST['id']);

?>