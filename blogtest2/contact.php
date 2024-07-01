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
    <title>Blog</title>
    <link rel="stylesheet" href="assets/css/style.css">
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
<style>
    .contact-container {
        display: flex;
        justify-content: space-around;
    }
    .contact {
        border: 1px solid #ccc;
        padding: 20px;
        width: 45%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .contact h2 {
        margin-top: 0;
    }
</style>
<body>
<main>
    <h1>Kontakt</h1>
</main>
<div class="contact-container">
    <div class="contact">
        <h2>Administrator</h2>
        <p>Imię: Maciej Szwoch</p>
        <p>Email: pierwszy@gmail.com</p>
        <p>Telefon: 123-456-789</p>
    </div>
    <div class="contact">
        <h2>Autor</h2>
        <p>Imię: Maciej Kupcewicz</p>
        <p>Email: drugi@example.com</p>
        <p>Telefon: 123-123-123</p>
    </div>
</div>



</body>
</html>
