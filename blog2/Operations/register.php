<?php

$host = 'localhost';
$dbname = 'blogbaza';
$user = 'root';
$pass = '';
$dsn = "mysql:host=$host;dbname=$dbname";

try {

    $conn = new PDO($dsn, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

    $username = $_POST['username'];
    $email = $_POST['email'];
    $password = password_hash($_POST['password'], PASSWORD_DEFAULT);

    $sql = "INSERT INTO users (username,password, email)  VALUES (:username,:password, :email )";
    $stmt = $conn->prepare($sql);

    $stmt->bindParam(':username', $username);
    $stmt->bindParam(':password', $password);
    $stmt->bindParam(':email', $email);
    $stmt->execute();

    echo "Rejestracja użytkownika zakończona sukcesem.";
} catch(PDOException $e) {
    echo "Błąd rejestracji użytkownika: " . $e->getMessage();
}
