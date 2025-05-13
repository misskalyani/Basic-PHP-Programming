<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_SESSION['basic'] = $_POST['basic'];
    $_SESSION['da'] = $_POST['da'];
    $_SESSION['hra'] = $_POST['hra'];
    echo "<a href='emp_session3.php'>Next</a>";
    exit();
}
?>
<form method="post">
    Basic: <input type="text" name="basic"><br>
    DA: <input type="text" name="da"><br>
    HRA: <input type="text" name="hra"><br>
    <input type="submit" value="Submit">
</form>
