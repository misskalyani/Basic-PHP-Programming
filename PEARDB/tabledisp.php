//display emp table using pear db
<?php
	$dsn="pgsql:/localhost/rbnb";
	$con=DB::connect($dsn);
	if(DB::isError($con))
	{
		die($con->getMessage());
	}
	$res=$con->query("select*from emp");
	while($row=$res->fetchrow())
	{
		echo("<br>No = $row[0]");
		echo("<br>Name = $row[1]");
		echo("<br>Salary = $row[2]");

	}
	$res->free();
	$con->disconnect();
?>