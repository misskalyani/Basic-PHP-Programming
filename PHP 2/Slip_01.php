<?php
session_start();

if (!isset($_SESSION['page_count'])) 
{
    $_SESSION['page_count'] = 1;
} else {
    $_SESSION['page_count']++;
}
?>

<html>
<body>
    <h1>Welcome to the Page View Counter</h1>
    <p>You have visited this page <?php echo ($_SESSION['page_count']); ?> times in this session.</p>
    
</body>
</html>
