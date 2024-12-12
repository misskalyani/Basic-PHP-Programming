//Random Access File Function
<?php
	$f1=fopen("abc.txt","r");
	echo("<br>File Pointer Position  =  ".ftell($f1));
	fseek($f1,200);//move file pointer 20 number position
	echo("<br>File Pointer Position  =  ".ftell($f1));
	
	echo("<br><br><br><br>file DISP pointer 20 number position = ");
	echo(fpassthru($f1));
	echo("<br>File Pointer Position = ".ftell($f1));

	rewind($f1);//start position
	echo("<br><br><br><br>file DISP Start  position <br> ");
	echo(fpassthru($f1));
?>