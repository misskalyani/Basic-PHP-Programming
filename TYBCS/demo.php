<html>
<body>
	<form method="post" action="demo.php">
	Enter RollNo
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
	
	$k=mysql_query("insert into student values($rno,'$nm','$add',$per)");
	if($k==true)
		echo("Record Insert Successfully....");
	mysql_close($con);
?>