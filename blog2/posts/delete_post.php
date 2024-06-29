<?php include '../config/config.php'; ?>;
<?php
    if(isset($_GET['del_id'])) {
        $id = $_GET['del_id'];
        $select = $conn->query("SELECT * FROM posts WHERE id =' $id'");
        $select->execute();
        $posts = $select->fetch(PDO::FETCH_OBJ);
        if ($_SESSION['author_id'] !== $posts->author_id) {
            header('location: http://localhost/blog2/index.php');
        } else {
            unlink("img/" . $posts->image . "");
            $delete = $conn->prepare("DELETE FROM posts WHERE id = :id");
            $delete->execute([':id' => $id]);
        }
        header('location: http://localhost/blog2/index.php');

    }

?>
