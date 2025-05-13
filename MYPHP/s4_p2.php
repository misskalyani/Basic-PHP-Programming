<?php
session_start();

if($_SERVER["REQUEST_METHOD"]=="POST")
{
	$_SESSION['eno']=$_POST['eno'];
	$_SESSION['ename']=$_POST['ename'];
	$_SESSION['address']=$_POST['address'];
}
?>
<html>
<body>
    <h2>Enter Earnings</h2>
    <form action="s4_p3.php" method="post">
        Basic Salary: 
	<input type="text" name="basic"<br><br>
        DA:
	<input type="text" name="da"><br><br>
        HRA: 
	<input type="text" name="hra" ><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
