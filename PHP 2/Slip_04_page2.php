<?php
session_start();

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $_SESSION['eno'] = $_POST['eno'];
    $_SESSION['ename'] = $_POST['ename'];
    $_SESSION['address'] = $_POST['address'];
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Earnings</title>
</head>
<body>
    <h2>Enter Earnings</h2>
    <form action="Slip_04_page3.php" method="post">
        Basic Salary: <input type="number" name="basic" required><br><br>
        DA: <input type="number" name="da" required><br><br>
        HRA: <input type="number" name="hra" required><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
