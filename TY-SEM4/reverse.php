<html>
<body>
	<form method="post" action="#">
	Enter Number :
	<input type="number" name="t1"><br>
	<input type="submit" value="OK">
	<input type="reset" value="Clear"><br>
</body>
</html>
<?php
	$n=$_POST["t1"];
	$r=0;
	while($n>0)
	{
		$d=$n%10;
		$r=$r*10+$d;
		$n=(int)$n/10;
	}
	echo("<h1>Reverse = ".$r);
?>