<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title></title>
</head>
<body>
Q.1) Write a menu driven program to perform the following stack related operations:
a) Insert an element in stack
b) Delete an element from stack
c) Display the contents of stack


	<form method="post">
		stack elements => 4,5,7,9,3,4<br>
		a) Insert an element in stack <input type="radio" name="t1" value="1"><br>
		enter no to insert : <input type="number" name="t2"><br>
		b) Delete an element from stack <input type="radio" name="t1" value="2"><br>
		c) Display the contents of stack <input type="radio" name="t1" value="3"><br>
		<input type="submit" name="">


	</form>
</body>
</html>

<?php
	$ch=$_POST['t1'];
	$n=$_POST['t2'];
	$a=array(4,5,7,9,3,4);

	switch($ch)
	{
		case 1 : array_push($a,$n);
			 print_r($a);
			 echo "inserted succesful...";
			break;
		case 2 : array_pop($a);
			 print_r($a);
			 echo "deleted succesful...";
			break;
		case 3 : print_r($a);
			break;
	}

?>