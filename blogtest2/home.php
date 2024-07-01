<?php
session_start();

if(isset($_SESSION['id']) && isset($_SESSION['username'])) {
    ?>

    <!DOCTYPE html>
    <html lang="en">
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
                <li><h2> Hello, <?php echo $_SESSION['username'];?></h2>
                    <a href="logout.php">Logout</a></li>
            </ul>
        </nav>
    </header>
    <body>
        <h1> Hello, <?php echo $_SESSION['username'];?></h1>
    </body>
    </html>

    <?php
    header("Location: index.php");
    }
    else {
        header("Location: index.php");
        exit();

}
?>