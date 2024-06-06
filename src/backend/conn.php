<?php
    if(session_status() === PHP_SESSION_NONE){
        session_start();
    }
    $hostname = 'localhost';
    $username = 'root';
    $password = '';
    $database = 'ellenmartins';
    $port = 3306;

    $conn = new PDO("mysql:host=$hostname;port=$port;dbname=$database", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    
?>