<?php
include '../config/config.php';
include 'auth.php';
if ($_SESSION['role'] !== 'administrator' && $_SESSION['user_id'] !== $_SESSION['author_id']) {
    header('Location: index.php');
    exit();
}
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $id = $_POST['id'];
    $title = $_POST['title'];
    $content = $_POST['content'];
    $image = $_POST['image'];

    if (!empty($_FILES['image']['name'])) {
        $target_dir = "../img/";
        $target_file = $target_dir . basename($_FILES['image']['name']);
        if (move_uploaded_file($_FILES['image']['tmp_name'], $target_file)) {
            $image = basename($_FILES['image']['name']);
        } else {
            echo "Wystąpił problem podczas przesyłania obrazka.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <title>Edytuj Wpis</title>
</head>
<body>
<h1>Edytuj Wpis</h1>
<form action="edit_post.php?id=<?php echo $_POST['id']; ?>" method="post" enctype="multipart/form-data">
    <input type="hidden" name="id" value="<?php echo $_POST['id']; ?>">
    <label for="title">Tytuł:</label>
    <input type="text" name="title" id="title" value="<?php echo htmlspecialchars($_POST['title']); ?>" required>
    <br>
    <label for="content">Treść:</label>
    <textarea name="content" id="content" required><?php echo htmlspecialchars($_POST['content']); ?></textarea>
    <br>
    <label for="image">Obrazek:</label>
    <input type="file" name="image" id="image">
    <br>
    <img src="../img/<?php echo htmlspecialchars($_POST['image']); ?>" alt="Obrazek wpisu">
    <br>
    <input type="submit" value="Zapisz Zmiany">
</form>
</body>
</html>