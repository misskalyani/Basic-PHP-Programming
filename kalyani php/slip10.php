Q.1) Write a script to accept two integers(Use html form having 2 textboxes).  
Write a PHP script to,  
a. Find mod of the two numbers.  
b. Find the power of first number raised to the second.  
c. Find the sum of first n numbers (considering first number as n)  
d. Find the factorial of second number.  
(Write separate function for each of the above operations.)  
<html>
<body>
	<form method="POST" action="#">
		Enter First Number :
		<input type="text" name="num1"><br>		
		Enter Second Number :
		<input type="text" name="num2"><br>
		 	
		a. Find mod of the two numbers.<br>  
		b. Find the power of first number raised to the second.,<br>  
		c. Find the sum of first n numbers (considering first number as n)  <br>
		d. Find the factorial of second number.  <br>

		Enter Choice :
		<input type="text" name="c"><br><br>
		<input type="submit" value="Submit">
	</form>
</body>
</html>
<?php
	$n1=(int)$_POST["num1"];
	$n2=(int)$_POST["num2"];
	$ch=(int)$_POST["c"];
	function mod($n1,$n2)
	{
		$s=$n1%$n2;
		echo("Mod = ".$s);
	}
	function power($n1,$n2)
	{
		echo("Power = ".pow($n1,$n2));
	}
	function sum($n1)
	{
		$s=0;
		while($n1>0)
		{
			$s=$s+$n1;
			$n1--;
		}
		echo("Sum = ".$s);
	}
	function fact($n2)
	{
		$f=1;
        	for($i = 1; $i <= $n2; $i++) 
		{
          		$f *= $i;
       		}
        echo "Factorial = " . $f;
      }
	
	switch($ch)
	{
		case 1:mod($n1,$n2);
			break;
		case 2:power($n1,$n2);
			break;
		case 3:sum($n1);
			break;
		case 4:fact($n2);
			break;
	}
	
?>