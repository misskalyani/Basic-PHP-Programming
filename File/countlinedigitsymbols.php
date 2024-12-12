<html>
<body>
<form method="post" action="#">
	Enter File Name :
	<input type="file" name="t1"><br>
	<input type="submit">
</form>
</body>
</html>
<?php
	$s1=$_POST["t1"];
	$f1=fopen("$s1","r");
	if($f1==false)
	{
		die("File Not Found");
	}
	$d=0;$l=0;$s=0;$c=0;
	while(!feof($f1))
	{
		$ch=fgetc($f1);//Read char by char
		if($ch=="\n")
			$l=$l+1;
		else if($ch>='0'&& $ch<='9')
			$d=$d+1;
		else if(($ch>='A'&& $ch<='Z')	|| ($ch>='a'&& $ch<='z'))
			$c=$c+1;
		else
			$s=$s+1;
	}	
	echo("<br>Count Lines = $l");
	echo("<br>Count Characters = $c");
	echo("<br>Count Digit = $d");
	echo("<br>Count Symbols = $s");
	fclose($f1);
?>
