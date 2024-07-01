<?php
session_start();
include 'logic.php';
$conn = mysqli_connect("localhost", "root", "", "blogbaza");
if(!$conn){
    echo "<h3 class='container bg-dark p-3 text-center text-warning rounded-lg mt-5'>Not able to establish Database Connection<h3>";
}
$sql = "SELECT * FROM posts";
$query = mysqli_query($conn, $sql);
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
            <?php if(isset($_SESSION['username']) && $_SESSION['username'] !== ''): ?>
                <li> <a href="logout.php">Logout</a></li>
            <?php endif; ?>
        </ul>
    </nav>
</header>
<body>

   <div class="container mt-5">

        <?php foreach($query as $q){?>
            <div class="bg-dark p-5 rounded-lg text-white text-center">
                <h1><?php echo $q['title'];?></h1>

                <div class="d-flex mt-2 justify-content-center align-items-center">
            <?php if(isset($_SESSION['username']) && $_SESSION['username'] !== ''): ?>
                    <a href="edit.php?id=<?php echo $q['id']?>" class="btn btn-light btn-sm" name="edit">Edit</a>
                    <form method="POST">
                        <input type="text" hidden value='<?php echo $q['id']?>' name="id">
                        <button class="btn btn-danger btn-sm ml-2" name="delete">Delete</button>
                    </form>
                </div>
            </div>
            <?php else: ?>
       <a href="edit.php?id=<?php echo $q['id']?>"style="visibility: hidden" class="btn btn-light btn-sm" name="edit">Nope</a>
       <form method="POST">
           <input type="text" hidden value='<?php echo $q['id']?>' name="id">
           <button class="btn btn-danger btn-sm ml-2" style="visibility: hidden" name="delete">Nope</button>
       </form>
   </div>
   </div>
            <?php endif; ?>


            <div class="img-box">
                <img src="data:iamge/jpg;charset=utf8;base64,<?php echo base64_encode($q['img'])?>" class="img-fluid" alt="Responsive image">
            </div>
            <p class="mt-5 border-left border-dark pl-3"><?php echo $q['content'];?></p>
        <?php } ?>

        <a href="index.php" class="btn btn-outline-dark my-3">Go Home</a>
   </div>

    <!-- Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js" integrity="sha384-B4gt1jrGC7Jh4AgTPSdUtOBvfO8shuf57BaghqFfPlYxofvL8/KUEfYiJOMMV+rV" crossorigin="anonymous"></script>

</body>
</html>