<?php
    $host='localhost';
    $username='root';
    $password='1234';
    $database='hotel_system';
    $connection = mysqli_connect($host, $username, $password, $database);
    $GLOBALS['connection']=$connection;
    include_once "function.php";
?>