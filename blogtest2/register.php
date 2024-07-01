<?php
include 'logic.php';
$conn = mysqli_connect("localhost", "root", "", "blogbaza");
if(!$conn){
    echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
}
$sql = "SELECT * FROM users";
$query = mysqli_query($conn, $sql);


if(!isset($_POST['username'], $_POST['password'], $_POST['email'])){
    exit('Empty Field(s)');
}
if(empty($_POST['username'] || $_POST['password'] || $_POST['email'])){
    exit('Values Field(s)');
}
if($stmt = $conn->prepare('SELECT id, password FROM users WHERE username = ?')) {
    $stmt->bind_param('s', $_POST['username']);
    $stmt->execute();
    $stmt->store_result();


    if ($stmt->num_rows > 0) {
        echo 'Username Already Exists';
    } else {
        if ($stmt = $conn->prepare('INSERT INTO users (username, password, email) VALUES (?, ?, ?)')) {

            $stmt->bind_param('sss', $_POST['username'], $_POST['password'], $_POST['email']);
            $stmt->execute();
            echo 'Successfully Registered';
            header('location: index.php');
        } else {
            echo 'Something went wrong';
        }
    }
    $stmt->close();
} else {
    echo 'Something went wrong';
}
$conn->close();

