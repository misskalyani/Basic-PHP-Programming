<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST")
{
    $_SESSION['eno'] = $_POST['eno'];
    $_SESSION['ename'] = $_POST['ename'];
    $_SESSION['address'] = $_POST['address'];
    echo "<a href='emp_session2.php'>Next</a>";
    exit();
}
?>
<form method="post">
    Eno: <input type="text" name="eno"><br>
    Ename: <input type="text" name="ename"><br>
    Address: <input type="text" name="address"><br>
    <input type="submit" value="Submit">
</form>
