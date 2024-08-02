<html>
<body>
	<form method="post" action="function.php">
	Enter Number 1=
	<input type="number" name="t1"><br>
	Enter Number 2=
	<input type="number" name="t2"><br>
	<input type="submit" value="OK">
	<input type="reset" value="Clear">
	</form>
</body>
</html>
<?php
	$a=$_POST["t1"];
	$b=$_POST["t2"];
	MOD($a,$b);
	POWER($a,$b);
	SUM($a);
	FACTORIAL($b);
	function MOD($a,$b)
	{
		$c=$a%b;
		echo("<br>MOD = ".$c);
	}
	function POWER($a,$b)
	{
		$p=1;
		for($i=1;$i<=5;$i++)
		{
			$p=$p*$a;
		}
		echo("<br>Sum Of First $n numbers = $s");
	}
	function FACTORIAL($n)
	{
		$s=1;
		for($i=1;$i<=$n;$i++)
			$a=$s*i;
		echo("<br>Factorial of $n numbers = $s");
	}
?>