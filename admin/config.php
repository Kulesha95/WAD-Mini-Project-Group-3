<?php
    $host='localhost';
    $username='root';
    $password='cricket49';
    $database='hotel_system';
    $connection = mysqli_connect($host, $username, $password, $database);
    $GLOBALS['connection']=$connection;
    include_once "function.php";
?>