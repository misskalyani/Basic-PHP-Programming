<html>
<body>
<form method="post" action="#">
	Enter File :
	<input type="text" name="t1">
	<br>1)Display Type of file
	<br>2)Display last access time of file
	<br>3)Display size of file
	<br>4)Delete the file
	<br>Enter Choice :
	<input type="text" name="t2"><br>
	<input type="submit">
</form>
</body>
</html>
<?php
	$f=$_POST["t1"];
	$ch=$_POST["t2"];
	switch($ch)
	{
		case 1:echo("<br>File Type = ".filetype($f));
			break;
		case 2:echo("<br>Last access time of file Time in Timestamp =".fileatime($f));
			break;
		case 3:echo("<br>File Size = ".filesize($f));
		break;
		case 4:unlink($f);
		       echo("File Deleted.....");
		       break;
	}
?>