<?php
session_start();
include_once '../config.php';
if(isset($_SESSION['user_id'])){
    $date= date("Y-m-d");
    $time= date("H:i:s");
    
    $insertSql = "INSERT INTO `review` (`id`,`rate`,`review`,`date`,`time`,`user_id`) VALUES(null,'$_POST[rate]','$_POST[review]','$date','$time','$_POST[user_id]')";
    $insertQuery=mysqli_query($connection,$insertSql);
    header("location:../../contact.php");
}else{
    ?>
     <script>
     alert("Please login to submit your Review... ");
     window.location= "../../contact.php";
     </script>
     
    <?php
   
}







?>
