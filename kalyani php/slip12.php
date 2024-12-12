Q.1) Write a PHP script for the following: Design a form to accept two numbers from the user. 
Give options to choose the arithmetic operation (use radio buttons). Display the result on the next 
form. (Use the concept of function and default parameters. Use ‘include’ construct or require statement)
<html>
	<body>
		<form method="POST" action="#">
			Enter First Number
			<input type="text" name="num1"><br>
			 Enter Second Number
			<input type="text" name="num2"><br>
			<input type="radio" name="r" value="r1">
			Addtion<br>
			<input type="radio" name="r" value="r2">
			Subtraction<br>
			<input type="radio" name="r" value="r3">
			Multiplication<br>
			<input type="radio" name="r" value="r4">
			Divsion<br><br>
			<input type="submit" value="Submit">
		</form>
	</body>
</html> 
<?php
	
	$n1=(int)$_POST["num1"];
	$n2=(int)$_POST["num2"];
	$ch=(int)$_POST["r"];
	if($ch==r1)
	{
		$sum=$n1+$n2;
		echo("Addition = ".$sum);
	}
	elseif($ch==r2)
	{
		$sub=$n1-$n2;
		echo("Subtraction = ".$sub);
	}
	elseif($ch==r3)
	{
		$mul=$n1*$n2;
		echo("Multiplication = ".$mul);
	}
	elseif($ch==r4)
	{
		$div=$n1/$n2;
		echo("Division = ".$div);
	}

?>