<?php
session_start();

$valid_username = "admin";
$valid_password = "password123";

if (!isset($_SESSION['attempts'])) {
    $_SESSION['attempts'] = 0;
}

if ($_SESSION['attempts'] >= 3) {
    echo "<p style='color: red;'>Too many failed attempts.</p>";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $username = $_POST['username'] ?? '';
    $password = $_POST['password'] ?? '';

    if ($username === $valid_username && $password === $valid_password) {
        $_SESSION['authenticated'] = true;
        $_SESSION['attempts'] = 0; 
        echo "Welcome ..........";
        exit;
    } else {
        $_SESSION['attempts']++;
        echo "<p style='color: red;'>Invalid credentials. Attempts left: " . (3 - $_SESSION['attempts']) . "</p>";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <form method="post" action="">
        Username:<input type="text" name="username" required><br>
        Password:<input type="password" name="password" required><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
