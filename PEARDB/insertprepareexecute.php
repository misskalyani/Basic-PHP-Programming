//insert values using prepare()and execute()
//display emp table using pear db
<?php
	$dsn="pgsql:/localhost/rbnb";
	$con=DB::connect($dsn);
	if(DB::isError($con))
	{
		die($con->getMessage());
	}
	$compile=$con->prepare("insert into emp values(?,?,?)");
	$val=array(1,'om',5000);
	$res=$con->execute($compile,$val);
	while($res==true)
	{
		echo("Record Insert Succesfully..");
	}
	$res->free();
	$con->disconnect();
?>