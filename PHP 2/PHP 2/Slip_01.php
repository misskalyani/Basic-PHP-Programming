<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);
?>
   


<?php
session_start();

if (!isset($_SESSION['page_count'])) {
    $_SESSION['page_count'] = 1;
} else {
    $_SESSION['page_count']++;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Page View Counter</title>
</head>
<body>
    <h1>Welcome to the Page View Counter</h1>
    <p>You have visited this page <strong><?php echo htmlspecialchars($_SESSION['page_count'], ENT_QUOTES, 'UTF-8'); ?></strong> times in this session.</p>
    <p><a href="reset.php">Reset Counter</a></p>
</body>
</html>
