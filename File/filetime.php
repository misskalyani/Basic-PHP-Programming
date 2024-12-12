<?php
	$f="abc.txt";
	if(file_exists($f))
	{
		echo("File Found ");
		echo("<br>File Size = ".filesize($f));
		echo("<br>File Access Time = ".date("h:m:s",fileatime($f)));
		echo("<br>File Change Time = ".date("h:m:s",filectime($f)));
		echo("<br>File Modify Time = ".date("h:m:s",filemtime($f)));
	
	}
	else
	{
		echo("File Not Found ");
	}
?>