<?php
setcookie('userdata')
?>

<html>
<head>
    <title> Cookies Demo</title>
</head>
<body>
    <p>Name: <?php echo $_COOKIE['myname']; ?></p>
    <p><?php print_r($_COOKIE); ?></p>
</body>

</html>
<?php
if($validLoginCredentials){
$_SESSION['user_id'] = $id;
$_SESSION['user_login'] = $login;
$_SESSION['user_name'] = $name;
}
?>;