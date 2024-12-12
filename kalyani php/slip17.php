Q.1) Write a PHP script to sort the following associative array : 
array(“Sagar"=>"31","Vicky"=>"41","Leena"=>"39","Ramesh"=>"40") in 
a) ascending order sort by Value 
b) ascending order sort by Key 
c) descending order sorting by Value 
d) descending order sorting by Key   
<html>
<body>
	<form method="POST" action="#">
	a) ascending order sort by Value<br> 
	b) ascending order sort by Key <br>
	c) descending order sorting by Value<br> 
	d) descending order sorting by Key <br> 

	Enter Choice : 
	<input type ="text" name="c"><br><br>
	<input type="submit" value="submit">
	</form>
</body>
</html>
<?php
	$a=array("Sagar"=>"31","Vicky"=>"41","Leena"=>"39","Ramesh"=>"40");
	$ch=$_POST["c"];
	switch($ch)
	{
		case 1:asort($a);
			print_r($a);
			break;
		case 2:ksort($a);
			print_r($a);
			break;
		case 3:arsort($a);
			print_r($a);
			break;
		case 4:krsort($a);
			print_r($a);
			break;
	}
?>