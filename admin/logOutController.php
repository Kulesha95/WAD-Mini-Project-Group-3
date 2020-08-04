<?php
// Clear all session data
session_start();
session_destroy();
// Redirect user in to the home page of the site
header("location:../index.php");
?>