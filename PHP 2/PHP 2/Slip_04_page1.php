<?php
session_start();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Employee Details</title>
</head>
<body>
    <h2>Enter Employee Details</h2>
    <form action="Slip_04_page2.php" method="post">
        Employee Number: <input type="text" name="eno" required><br><br>
        Employee Name: <input type="text" name="ename" required><br><br>
        Address: <input type="text" name="address" required><br><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>
