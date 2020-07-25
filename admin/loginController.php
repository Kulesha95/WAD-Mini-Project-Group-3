<?php
session_start();
include_once "config.php";
include_once "settings.php";


if ($_POST['username']==$adminUserName && $_POST['password']==$adminPassword) {
    header("location:admin.php");
}else{
    $userSQL="SELECT * FROM `user` WHERE `username`='$_POST[username]' AND `password`='$_POST[password]'";
    $userResult=mysqli_query($connection,$userSQL);
    if($userData=mysqli_fetch_assoc($userResult)){
        $_SESSION['user_id']=$userData['id'];
        header("location:../index.php");
    }else{
        ?>
        <script>
            alert("Username or password is incorrect. Please try again.");
            window.location="index.php";
        </script>
        <?php
    }
}
?>