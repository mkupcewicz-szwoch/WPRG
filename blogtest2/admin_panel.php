<?php
include 'logic.php';
$conn = mysqli_connect("localhost", "root", "", "blogbaza");
if(!$conn){
    echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
}
$sql = "SELECT * FROM posts";
$query = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../assets/css/style.css">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-JcKb8q3iqJ61gNV9KGb8thSsNjpSL0n8PARn9HuZOnIxN0hoP+VmmDGMN5t9UJ0Z" crossorigin="anonymous">

    <title>Blog using PHP & MySQL</title>
</head>
<header>
    <nav>
        <ul>
            <li><a href="index.php">Strona Główna</a></li>
            <li><a href="contact.php">Kontakt</a></li>
            <li><a href="admin_panel.php">Panel Administratora</a></li>
            <li><a href="login_form.php">Logowanie</a></li>
            <li><a href="register_form.php">Rejestracja</a></li>
        </ul>
    </nav>
</header>
<body>
<main>
    <h1>Panel Administratora</h1>
</main>
</body>
</html>

