<?php
session_start();
include '../config.php';

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $email = $_POST['email'];
}
?>
<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Resetowanie Hasła - Użytkownik</title>
</head>
<body>
<h1>Resetowanie Hasła - Użytkownik</h1>


