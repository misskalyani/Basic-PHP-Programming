<html>
<body>
	<form method="post" action="demo3.php">
	Enter RollNo To Delete Record
	<input type ="text" name="t1"><br><br><br><br>
	<input type="submit">
		
</body>
</html>
<?php
	$con=mysql_connect("localhost","root","");
	if($con==false)
		die("Error in Connection.....");
	
	mysql_select_db("rbnb");
	$rno=$_POST["t1"];
	
	$k=mysql_query("delete from student  where RollNo=$rno");
	if($k==true)
		echo("Record Deleted Successfully....");
	mysql_close($con);
?>

