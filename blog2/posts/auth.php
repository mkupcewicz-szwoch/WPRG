<?php

session_start();
if (!isset($_SESSION['user_id'])) {
    exit();
}
if ($_SESSION['role'] !== 'administrator' && $_SESSION['role'] !== 'author') {
    exit();
}
if (isset($_GET['logout'])) {
    session_destroy();
    exit();
}
