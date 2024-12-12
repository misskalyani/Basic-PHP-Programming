<html>
<body>
<form method="post" action="#">
	Enter Roll No:
	<input type="text" name="t1"><br>
	<input type="submit" value="search">
</form>
</body>
</html>
<?php
	$dsn="pgsql:/localhost/rbnb";
	$con=DB::connect($dsn);
	if(DB::isError($con))
	{
		die($con->getMessage());
	}
	$no=$_POST["t1"];
	$res=$con->query("select*from stud where rno=$no");
	while($rno=$res->fetchrow())
	{
		echo("Name = ".$row[1]);
		echo("Class = ".$row[2]);
	}
	$res->free();
	$con->disconnect();
?>