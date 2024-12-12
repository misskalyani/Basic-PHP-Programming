<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Q.1) Write a PHP program to read two file names from user and copy the  
		content of first file into second file
	</title>
</head>
<body>
		<form method="post">
			Flie 1 : <input type="text" name="t1"><br>
			File 2 : <input type="text" name="t2"><br>
			<input type="submit" name="">
		</form>
</body>
</html>

<?php
	$a=$_POST['t1'];
	$b=$_POST['t2'];

	$f1=fopen($a,"r");
	$f2=fopen($b,"w");

	while (($l=fgets($f1))!=false) 
	{
		fputs($f2,$l);
	}
	echo "successful";
?>