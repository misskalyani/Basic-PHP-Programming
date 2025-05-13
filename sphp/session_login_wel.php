<?php
session_start();
if (isset($_SESSION['user'])) 
{
    echo "Welcome, {$_SESSION['user']}<br>";
    if (isset($_POST['logout'])) 
    {
        session_unset();
        session_destroy();
        echo "Logged out";
    }
}
?>
<form method="post">
    <input type="submit" name="logout" value="Logout">
</form>