<?php include '../config/config.php'?>;



<?php
if(isset($_POST['submit'])) {
    if($_POST['email'] == '' or $_POST['username'] == '' or $_POST['password'] == '') {
        echo "uzupełnij pola";
    } else {
    $email = $_POST['email'];
    $username = $_POST['username'];
    $password = $_POST['password'];
    }

    $insert = $conn->prepare("INSERT INTO users (username, password, email) VALUES (':username', ':password',':email')");
    $insert->execute(array(':email' => $email, ':username' => $username, ':password' => $password));
};

?>;
<!DOCTYPE html>
<html lang="pl">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>




<body>
<?php include '../templates/header.php'; ?>

<h2>Formularz rejestracji użytkownika</h2>
<form method="post" action="register_form.php" >

    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <label for="username">Nazwa użytkownika:</label>
    <input type="text" id="username" name="username" required><br><br>

    <label for="password">Hasło:</label>
    <input type="password" id="password" name="password" required><br><br>

    <button type="submit" name="submit">Zarejestruj</button>
</form>


<?php include '../templates/footer.php'; ?>
</body>

</html>