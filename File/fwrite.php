<?php
	$s1="Welcome to RBNB";
	$fh=fopen("abc.txt","w");
	fwrite($fh,$s1);
	fclose($fh);
	echo("File write Succsfully.....");
?>