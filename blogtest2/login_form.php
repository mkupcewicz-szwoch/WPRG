<?php
include 'logic.php';
$conn = mysqli_connect("localhost", "root", "", "blogbaza");
if(!$conn){
    echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
}
//$sql = "SELECT * FROM users";
//$query = mysqli_query($conn, $sql);

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



<body>

<form action="login.php" method="post">
    <h2>Login</h2>
    <?php if(isset($_GET['error'])){ ?>
        <p class="error"> <?php echo $_GET['error']; ?></p>}
    <?php } ?>
    <label for="username">Username:</label><br>
    <input type="text" id="username" name="username" placeholder="Username"><br>
    <label for="password">Password:</label><br>
    <input type="password" id="password" name="password" placeholder="Password"><br><br>
    <button type="submit">Login</button>
</form>



</body>
</html>