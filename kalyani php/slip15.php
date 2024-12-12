Q.1) Design a form to accept string from the user and perform the following operations 
a.  To select first 5 words from the string 
b.  Convert the given string to lowercase and then to Title case. 
c.  Pad the given string with “*” from left and right both the sides.  
d.  Remove the leading whitespaces from the given string.  
e.  Find the reverse of given string.  
<html>
<body>
<form method="POST" action="#">
	Enter String:
	<input type="text" name="s"><br>
	a.  To select first 5 words from the string <br>
	b.  Convert the given string to lowercase and then to Title case.<br> 
	c.  Pad the given string with “*” from left and right both the sides.<br>  
	d.  Remove the leading whitespaces from the given string. <br> 
	e.  Find the reverse of given string. <br>
	Enter Choice :
	<input type="text" name="c"><br>
	<input type="submit" value="submit">
</form>
</body>
</html>
<?php
	$s1=$_POST["s"];
	$ch=$_POST["c"];
	switch($ch)
	{
		case 1:$s=substr($s1,0,5);
			echo("String = ".$s);
			break;
		case 2:$s=strtolower($s1);
			$t=ucwords($s1);
			echo("Lower Case string = ".$s."<br>");
			echo("Title Case string = ".$t);
			break;
		case 3:$s=str_pad($s1,strlen($s1)+2,'*',STR_PAD_BOTH);
			echo("Pad string = ".$s);
			break;
		case 4:$l=ltrim($s1);
			echo("trimmed String = ".$l);
			break;
		case 5:$r=strrev($s1);
			echo("Reverse string = ".$r);
			break;
			
	}
?>