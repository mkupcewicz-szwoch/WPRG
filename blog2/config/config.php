<?php
try {
    $host = 'localhost';
    $dbname = 'blogbaza';
    $user = 'root';
    $password = '';
    $dsn = "mysql:host=$host;dbname=$dbname";


    $conn = new PDO($dsn, $user, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

