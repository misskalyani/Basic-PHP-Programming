Q.1) Write a menu driven program to perform various file operations. Accept filename from user.             
a) Display type of file.  
b) Display last modification time of file  
c) Display the size of file  
d) Delete the file 
<html>
<body>
	<form method="POST" action="#">
	Enter File Name:
	<input type="file" name="file"><br>
	
	a) Display type of file.<br>  
	b) Display last modification time of file.<br>
	c) Display the size of file.<br>  
	d) Delete the file.<br> 

	Enter Choice:
	<input type="text" name="c"><br><br><br>
	<input type="submit" value="submit">
	</form>
</body>
</html>
<?php
	$f1=$_POST["file"];
	$ch=$_POST["c"];
	switch($ch)
	{
		case 1:if(file_exists($f1))
				echo("Type of file ".filetype($f1));
			else
				die("file not found");
			break;
		case 2:if(file_exists($f1))
				echo(" last modification time of file".filemtime($f1));
			else
				die("file not found");
			break;
		case 3:if(file_exists($f1))
			   echo("file size ".filesize($f1));
		        else
				die("file not found");
			break;
		case 4:if(file_exists($f1))
				echo("File Delete Successfully...".unlink($f1));
			  else
				die("file not found");
			break;


	}
?>