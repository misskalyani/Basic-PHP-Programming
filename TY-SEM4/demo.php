<html>
<body>
	<form method="post" action="demo.php">
	String 1 :
	<input type="text" name="t1"><br>
	String 2 :
	<input type="text" name="t2"><br>
	<input type="submit" value="OK">
	<input type="reset" value="Clear">
	</form>
</body>
</html>
<?php
	$n1=$_POST["t1"];
	$n2=$_POST["t2"];
	$k=strcmp($n1,$n2);
	if($k==0)
		echo("Strings Are Equal");
	else
		echo("Strings Are NOT Equal");		
?>