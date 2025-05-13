<html>
	<!--
		Q. 1) Write a PHP script to accept Employee details (Eno, Ename, Address) on first page. On second 
		page accept earning (Basic, DA, HRA). On third page print Employee information (Eno, Ename, Address, 
		Basic, DA, HRA, Total) [ Use Session]  
	--!>
</html>
<?php
session_start();
?>

<html>
<body>
    <h2>Enter Employee Details</h2>
    <form action="s4_p2.php" method="post">
        Employee Number:
	 <input type="text" name="eno" ><br>
        Employee Name:
	 <input type="text" name="ename" ><br>
        Address: 
	<input type="text" name="address" ><br>
        <input type="submit" value="Next">
    </form>
</body>
</html>
