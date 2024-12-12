<?php
	$f1=fopen("abc.txt","r");
	if($f1==false)
	{
		die("File Not Found");
	}
	$data=fread($f1,filesize("abc.txt"));
	echo $data;
	fclose(f1);
?>