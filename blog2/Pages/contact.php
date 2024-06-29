<?php include '../config/config.php' ?>

<!DOCTYPE html>
<html lang="pl">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Blog</title>
    <link rel="stylesheet" href="../assets/css/style.css">
</head>
<style>
    .contact-container {
        display: flex;
        justify-content: space-around;
    }
    .contact {
        border: 1px solid #ccc;
        padding: 20px;
        width: 45%;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
    }
    .contact h2 {
        margin-top: 0;
    }
</style>
<body>
<?php include '../templates/header.php'; ?>
<main>
    <h1>Kontakt</h1>
</main>
<div class="contact-container">
    <div class="contact">
        <h2>Administrator</h2>
        <p>Imię: Maciej Szwoch</p>
        <p>Email: pierwszy@gmail.com</p>
        <p>Telefon: 123-456-789</p>
    </div>
    <div class="contact">
        <h2>Autor</h2>
        <p>Imię: Maciej Kupcewicz</p>
        <p>Email: drugi@example.com</p>
        <p>Telefon: 123-123-123</p>
    </div>
</div>


<?php include '../templates/footer.php'; ?>

</body>
</html>
