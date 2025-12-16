<?php
session_start();

$validUser = 'JuMi';
$validPass = '091225';

if (
    $_POST['username'] === $validUser &&
    $_POST['password'] === $validPass
) {
    $_SESSION['login'] = true;
    header('Location: home.php');
} else {
    echo 'Login gagal. <a href="index.php">Coba lagi</a>';
}
