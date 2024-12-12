Q.1) Write a PHP program to read two file names from user and append content of first file into second file. 
<html>
	<body>
	<form method="POST" action="#">
		Enter First File Name:
		<input type="file" name="a"><br>
		Enter Second File Name:
		<input type="file" name="b"><br><br>
		
		<input type="submit" value="submit">
	</form>
	</body>
</html>
<?php
	$f1=$_POST["a"];
	$f2=$_POST["b"];
	if(!file_exists($f1))
		die("File 1 Not Found");
	if(!file_exists($f2))
		die("File 2 Not Found");
	$fp1=fopen($f1,'r');
	$fp2=fopen($f2,'a');
	$data=fread($fp1,filesize($f1));
	fwrite($fp2,$data);
	echo("File write Succesfully...");
	fclose($fp1);
	fclose($fp2);
?>