<?php
session_start();
include_once '../config.php';
// If the user logged in save the review in to the database and return back to the contact page
if(isset($_SESSION['user_id'])){
    $date= date("Y-m-d");
    $time= date("H:i:s");
    
    $insertSql = "INSERT INTO `review` (`id`,`rate`,`review`,`date`,`time`,`user_id`) VALUES(null,'$_POST[rate]','$_POST[review]','$date','$time','$_POST[user_id]')";
    $insertQuery=mysqli_query($connection,$insertSql);
    header("location:../../contact.php");
//  If the user not logeed in display an error message and redirected to the login page
}else{
    ?>
     <script>
     alert("Please login to submit your Review... ");
     window.location= "../index.php";
     </script>
     
    <?php
   
}
?>
