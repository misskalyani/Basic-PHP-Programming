Q.1) Write a menu driven program to perform the following operations on an associative array 
a. Reverse the order of each element’s key-value pair. 
b. Traverse the element in an array in random order. 
c. Convert the array elements into individual variables. 
d. Display the elements of an array along with key. 
<html>
	<body>
		<form method="POST" action="#">
		a. Reverse the order of each element’s key-value pair.<br> 
		b. Traverse the element in an array in random order.<br> 
		c. Convert the array elements into individual variables.<br> 
		d. Display the elements of an array along with key. <br>

		Enter Choice :
		<input type="text" name="c"><br>
		<input type="submit" value="submit"><br>
		</form>
	</body>
</html>
<?php
	$a=array("sagar"=>"31","vicky"=>"41","leena"=>"39","Ramesh"=>"40");
	$ch=$_POST["c"];
	switch($ch)
	{
		case 1:$filpped=array_flip($a);
			print_r($filpped);
			break;
		case 2:shuffle($a);
			print_r($a);
			break;
		case 3:extract($a);
			echo "$sagar<br>";
			echo "$vicky<br>";
			echo "$leena<br>";
			echo "$Ramesh<br>";
			break;
		case 4:foreach($a as $key=>$value)
			{
				echo("$key:$value<br>");	
			} 
			break;
	}
?>