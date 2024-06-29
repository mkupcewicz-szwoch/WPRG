<?php include '../config/config.php'?>;
<?php

if(isset($_POST['submit'])) {
    if($_POST['id'] == '' OR $_POST['title'] == '' OR
        $_POST['content'] == '' OR $_POST['image'] == '' OR $_POST['created_at'] == '' OR $_POST['author_id'] == '') {
        echo "<div>
                 enter data into the inputs
                </div>";
    } else {
        $id = $_POST['category_id'];
        $title = $_POST['title'];
        $content = $_POST['body'];
        $image = $_FILES['img']['name'];
        $user_id = $_SESSION['user_id'];
        $user_name = $_SESSION['username'];
        $dir = 'img/' . basename($image);

        $insert = $conn->prepare("INSERT INTO posts (id, title, content, image, created_at, author_id)
            VALUES (:id, :title, :content, :image, :created_at, :author_id )");

        $insert->execute([
            ':title' => $title,
            ':content' => $content,
            ':image' => $image,
            ':user_id' => $user_id,
            ':user_name' => $user_name,
        ]);
        if(move_uploaded_file($_FILES['img']['tmp_name'], $dir)) {
            header('location: http://localhost/blog2/index.php');
        }
    }
}
?>
<form method="POST" action="add_post.php" enctype="multipart/form-data">
    <div class="form-outline mb-3">
        <input type="text" name="title" id="form2Example1" class="form-control" placeholder="title" />
    </div>
    <div class="form-outline mb-3">
        <input type="text" name="subtitle" placeholder="subtitle" />
    </div>
    <div class="form-outline mb-3">
        <textarea type="text" name="body" rows="8"></textarea>
    </div>
    <div class="form-outline mb-3">
        <input type="file" name="img" />
    </div>
    <button type="submit" name="submit" class="btn text-center">create</button>

</form>