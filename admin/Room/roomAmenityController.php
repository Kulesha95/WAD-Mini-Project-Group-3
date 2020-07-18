<?php

    include_once "../config.php";

     $amenitySql="select * from amenity";
    $amenityResult=mysqli_query($connection,$amenitySql);
    while($amenityData=mysqli_fetch_assoc($amenityResult)){
        if(isset($_POST['amenity'.$amenityData['id']])){
             $roomAmenitySql="select * from room_has_amenity WHERE amenity_id='$amenityData[id]'and room_id='$_POST[id]'";
            $roomAmenityResult=mysqli_query($connection,$roomAmenitySql);
            if(!($roomAmenityData=mysqli_fetch_assoc($roomAmenityResult))){
                 $insertSql="INSERT INTO room_has_amenity(room_id,amenity_id) VALUES ('$_POST[id]','$amenityData[id]')";
                $insertQuery=mysqli_query($connection,$insertSql);
            }
        }else{
             $roomAmenitySql="select * from room_has_amenity WHERE amenity_id='$amenityData[id]'and room_id='$_POST[id]'";
            $roomAmenityResult=mysqli_query($connection,$roomAmenitySql);
            if($roomAmenityData=mysqli_fetch_assoc($roomAmenityResult)){
                 $deleteSql="DELETE FROM room_has_amenity WHERE amenity_id='$amenityData[id]'and room_id='$_POST[id]'";
                $deleteQuery=mysqli_query($connection,$deleteSql);
            }
        }
    }
    header("location:roomFeatureView.php?id=".$_POST['id']);

?>