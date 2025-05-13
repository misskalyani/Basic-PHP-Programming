<?php
session_start();
if (!isset($_SESSION['attempts'])) 
{
    $_SESSION['attempts'] = 0;
}
if ($_SESSION['attempts'] < 3) 
{
    if ($_SERVER["REQUEST_METHOD"] == "POST") 
    {
        if ($_POST['username'] == 'admin' && $_POST['password'] == '12345') 
        {
            $_SESSION['user'] = $_POST['username'];
            echo '<a href="session_login_wel.php">continue</a>';
            exit();
        } 
        else 
        {
            $_SESSION['attempts']++;
            echo "Invalid login. Attempt {$_SESSION['attempts']} of 3.<br>";
        }
    }
?>
<form method="post">
    <input type="text" name="username" placeholder="Username"><br>
    <input type="password" name="password" placeholder="Password"><br>
    <input type="submit" value="Login">
</form>
<?php 
}
else 
{
    echo "Too many failed attempts.";
}
?>
