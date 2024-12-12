Q.1) Write a menu driven program to perform the following queue related operations  
a) Insert an element in queue  
b) Delete an element from queue  
c) Display the contents of queue  
<html>
<body>
	<form method="POST" action="#">
	a) Insert an element in queue <br> 
	b) Delete an element from queue  <br>
	c) Display the contents of queue  <br>
	Enter Choice
	<input type="text" name="c"><br>
	<input type="submit" value="submit">
	</form>
</body>
</html>
<?php
	$ch=$_POST["c"];
	$a=array(4,5,67,8);
	switch($ch)
	{
		case 1:array_unshift($a,67);
			print_r($a);
			break;
		case 2:array_shift($a);
			print_r($a);
       			break;
		case 3:print_r($a);
			break;
	}
?>