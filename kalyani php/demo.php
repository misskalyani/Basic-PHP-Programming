<?php
	include"demo.html";
	$n1=(int)$_POST["num1"];
	$n2=(int)$_POST["num2"];
	$ch=(int)$_POST["r"];
	if($ch==r1)
	{
		$sum=$n1+$n2;
		echo("Addition = ".$sum);
	}
	else if($ch==r2)
	{
		
		echo("Subtraction = ".$n1-$n2);
	}
	else if($ch==r3)
	{
		$mul=$n1*$n2;
		echo("Multiplication = ".$mul);
	}
	else if($ch==r4)
	{
		$div=$n1/$n2;
		echo("Division = ".$div);
	}

?>