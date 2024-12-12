<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
		Q.1) Write a menu driven program to perform various file operations. Accept filename fromuser.
		a) Display type of file.
		b) Display last modification time of file
		c) Display the size of file
		d) Delete the file



		<form method="post">
			File Name : <input type="text" name="t1"> <br>
			Display type of file: <input type="radio" name="t2" value="1"><br>
		 	Display last modification time of file:<input type="radio" name="t2" value="2"><br>
		 	Display the size of file:<input type="radio" name="t2" value="3"><br>
		 	Delete the file:<input type="radio" name="t2" value="4"><br>
		 	<input type="submit">
		</form>
</body>
</html>

<?php
	$a=$_POST['t1'];
	//$f1=fopen($a,"r");
	$ch=$_POST['t2'];

	switch($ch)
	{
		case 1 : echo(filetype($a));
			break;
		case 2 : echo(filemtime($a));
			break;
		case 3 : echo(file_size($a));
			break;
		case 4 : echo(unlink($a));
			 echo("file deleted");
			break;
	}

?>