<html>
<body>
<form method="post" action="#">
	Enter File Name :
	<input type="file" name="t1"><br>
	<input type="submit">
</form>
</body>
</html>
<?php
	$s1=$_POST["t1"];
	$f1=fopen("$s1","r");
	if($f1==false)
	{
		die("File Not Found");
	}
	while(!feof($f1))
	{
		$line=fgets($f1);//Read Line by line
		echo $line;
	}	
	fclose($f1);
?>
