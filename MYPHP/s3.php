<html>
	<!--
		Q. 1) Write a PHP script to accept username and password. If in the first three chances, username and 
		password entered is correct then display second form with “Welcome message” otherwise display error 
		message. [Use Session]  
	--!>
</html>
<?php
session_start();

$valid_username = "admin";
$valid_password = "password123";

if (!isset($_SESSION['attempts'])) 
{
    $_SESSION['attempts'] = 0;
}

if ($_SESSION['attempts'] >= 3) 
{
    echo "Too many failed attempts.";
    exit;
}

if ($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $username = $_POST['username'] ;
    $password = $_POST['password'] ;

    if ($username === $valid_username && $password === $valid_password) 
    { 
        echo "Welcome ..........";
        exit;
    } else 
   {
        $_SESSION['attempts']++;
        echo " Attempts left: " . (3 - $_SESSION['attempts']);
    }
}
?>
<html>
<head>
    <title>Login Form</title>
</head>
<body>
    <form method="post" action="">
        Username:<input type="text" name="username"><br>
        Password:<input type="password" name="password"><br>
        <input type="submit" value="Login">
    </form>
</body>
</html>
