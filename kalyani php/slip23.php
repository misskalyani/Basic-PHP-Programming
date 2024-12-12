Q.1) Write a menu driven program to perform the following stack related operations: 
a) Insert an element in stack  
b) Delete an element from stack  
c) Display the contents of stack
<html>
<body>
	<form method="POST" action="#">
	a) Insert an element in stack <br> 
	b) Delete an element from stack  <br>
	c) Display the contents of stack<br>
	Enter choice:
	<input type="text" name="c">
	<input type="submit" value="submit">
	</form>
</body>
</html>
<?php
	$ch=$_POST["c"];
	$a=array(4,5,6);
	switch($ch)
	{
		case 1:array_push($a,7);
			print_r($a);
			break;
		case 2:array_pop($a);
			print_r($a);
			break;
		case 3:print_r($a);
			break;
	}
?>