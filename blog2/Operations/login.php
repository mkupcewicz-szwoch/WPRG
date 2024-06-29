<?php
$host = 'localhost';
$dbname = 'blogbaza';
$user = 'root';
$pass = '';
$dsn = "mysql:host=$host;dbname=$dbname";
try {
    $conn = new PDO($dsn, $user, $pass);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch(PDOException $e) {
    echo "Connection failed: " . $e->getMessage();
    exit;
}

session_start();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    if (isset($_POST['username']) && isset($_POST['password'])) {
        $username = $_POST['username'];
        $password = $_POST['password'];

        $host = 'localhost';
        $dbname = 'blogbaza';
        $user = 'root';
        $pass = '';

        try {

            $conn = new PDO("mysql:host=$host;dbname=$dbname", $user, $password);
            $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

            $stmt = $conn->prepare("SELECT * FROM users WHERE username = :username AND password = :password");
            $stmt->execute(['username' => $username, 'password' => $password]);
            $user = $stmt->fetch(PDO::FETCH_ASSOC);

            if ($user) {
                $_SESSION['user_id'] = $user['id'];
                $_SESSION['username'] = $user['username'];
                $_SESSION['user_level'] = $user['user_level'];

                header('Location: ../Pages/index.php');
                exit;
            } else {
                echo "Invalid username or password.";
            }
        } catch(PDOException $e) {
            echo "Connection failed: " . $e->getMessage();
        }
    } else {
        echo "Please enter username and password.";
    }
} else {
    echo "Access denied.";
}


