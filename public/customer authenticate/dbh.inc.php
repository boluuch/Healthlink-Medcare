<?php

$dsn = "mysql:host=localhost;dbname=healthlink";
$dbusername = "root";
$dbpassword = "Ucee1812!";//change the password

try {
    //pdo=PHP data object
    $pdo = new PDO($dsn, $dbusername, $dbpassword);
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
     echo "connection failed". $e->getMessage();
}