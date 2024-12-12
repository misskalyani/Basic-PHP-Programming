<html>
<body>
	<form method="post" action="demo2.php">
	Enter RollNo To Update Record
	<input type ="text" name="t1"><br>
	Enter Name
	<input type="text" name="t2"><br>
	Enter Address
	<input type="textarea" name="t3"><br>
	Enter Percentage
	<input type="text" name="t4"><br><br><br>
	<input type="submit">
		
</body>
</html>
<?php
	$con=mysql_connect("localhost","root","");
	if($con==false)
		die("Error in Connection.....");
	
	mysql_select_db("rbnb");
	$rno=$_POST["t1"];
	$nm=$_POST["t2"];
	$add=$_POST["t3"];
	$per=$_POST["t4"];
	
	$k=mysql_query("update student set Name='$nm',Address='$add',Percent=$per where RollNo=$rno");
	if($k==true)
		echo("Record Update Successfully....");
	else
		echo("Not Found");
	mysql_close($con);
?>

