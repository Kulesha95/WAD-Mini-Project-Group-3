<?php
include_once "../function.php";
include_once "../config.php";

// Create empty Array
$dates = [];
// Search all booking dates
$bookingsSql="SELECT * FROM `booking` WHERE ((`from` BETWEEN '$_GET[date]-01' AND '$_GET[date]-31') OR (`to` BETWEEN '$_GET[date]-01' AND '$_GET[date]-31')) AND `room_id`='$_GET[room]'";
$bookingsResult=mysqli_query($connection,$bookingsSql);
while($bookingsRow=mysqli_fetch_assoc($bookingsResult)){
    // Add first date to array
    array_push($dates,$bookingsRow['from']);
    $date= date_create($bookingsRow['from']);
    // Add other dates between last day to the dates array
    while($date->modify('+1 day')!=date_create($bookingsRow['to'])->modify('+1 day')){
        array_push($dates,$date->format("Y-m-d"));
    }
}
// return booking dates
echo json_encode($dates);
?>