<?php
session_start();
include_once "config.php";
include_once "settings.php";

// Check whether the user is admin. If admin redirect him to admin panel
if ($_POST['username']==$adminUserName && $_POST['password']==$adminPassword) {
    header("location:admin.php");
// If not admin logged in as user
}else{
    // Check wether the user exists in given username and password
    $userSQL="SELECT * FROM `user` WHERE `username`='$_POST[username]' AND `password`='$_POST[password]'";
    $userResult=mysqli_query($connection,$userSQL);
    // If exist redirect the user to site home page. Store logged in user in session storage
    if($userData=mysqli_fetch_assoc($userResult)){
        $_SESSION['user_id']=$userData['id'];
        header("location:../index.php");
    // If not exist display and error message and redirect to the login page
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