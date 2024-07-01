<?php
include 'logic.php';
$conn = mysqli_connect("localhost", "root", "", "blogbaza");
if(!$conn){
    echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
}
$sql = "SELECT * FROM users";
$query = mysqli_query($conn, $sql);
?>;


<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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



<body>

<h2>Formularz rejestracji użytkownika</h2>
<form method="post" action="register.php" >

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="username">Nazwa użytkownika:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Hasło:</label>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit" name="submit">Zarejestruj</button>
</form>


</body>

</html>