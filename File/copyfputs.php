<html>
<body>
<form method="post" action="#">
	Enter Source File Name :
	<input type="file" name="t1"><br>
	Enter Destination File Name :
	<input type="file" name="t2"><br>

	<input type="submit">
</form>
</body>
</html>
<?php
	$s1=$_POST["t1"];
	$s2=$_POST["t2"];
	$f1=fopen("$s1","r");
	$f2=fopen("$s2","w");
	if($f1==false)
	{
		die("Source File Not Found");
	}
	if($f2==false)
	{
		die("Destination File Not Found");
	}
	while(!feof($f1))
	{
		$s=fgets($f1);
		fputs($f2,$s);
	}
	echo("File Copy Successfully....");
	fclose($f2);	
	fclose($f1);
?>
