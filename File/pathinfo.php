<?php
	$a=pathinfo("C:\xampp\htdocs\File\abc.txt");
	print_r($a);
	echo("<br><br><br>Extension = ".$a['extension']);
	echo("<br><br><br>Directory = ".$a['dirname']);
	echo("<br><br><br>Base Name = ".$a['basename']);
	echo("<br><br><br>File Name = ".$a['filename']);
?>