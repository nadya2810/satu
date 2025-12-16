<?php
session_start();

if (isset($_SESSION['login'])) {
    header('Location: home.php');
    exit;
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Login</title>
    <link rel="stylesheet" href="style.css">
</head>
<body class="center">
    <form action="auth.php" method="post" class="card">
        <h2>Login</h2>

        <input
            type="text"
            name="username"
            placeholder="Username"
            required
        >

        <input
            type="password"
            name="password"
            placeholder="Password"
            required
        >

        <button type="submit">Masuk</button>
    </form>
</body>
</html>
