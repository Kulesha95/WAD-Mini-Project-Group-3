<?php 
include_once '../config.php';
$date= date("Y-m-d");
$time= date("H:i:s");

$insertSql="INSERT INTO `booking` (`id`,`from`,`to`,`reserved_date`,`reserved_time`,`user_id`,`room_id`,`status`) VALUES(null,'$_POST[from]','$_POST[to]','$date',$time','$_POST[user_id]','$_POST[room_id]','0')";
$insertQuery=mysqli_query($connection,$insertSql);
header("location:../../room-view.php?id=".$_POST['room_id']);
?>