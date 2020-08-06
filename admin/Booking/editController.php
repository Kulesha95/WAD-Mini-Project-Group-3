<?php 
include_once '../config.php'; 
$date= date("Y-m-d");
$time= date("H:i:s");
//  update booking   
$updateSql="UPDATE `booking` SET `from`='$_POST[from]',`to`='$_POST[to]',`reserved_date`='$date',`reserved_time`='$time',`room_id`='$_POST[room_id]' WHERE `id`='$_POST[id]'";
$updateQuery=mysqli_query($connection,$updateSql);
header("location:listView.php");
?>