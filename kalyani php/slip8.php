Q.1) Design an HTML form to accept two strings from the user. Write a PHP script for the following. 
a. Find whether the small string appears at the start of the large string.  
b. Find the position of the small string in the big string.  
c. Compare both the string for first n characters, also the comparison should not be case sensitive. 
<html>
	<body>
		<form method="POST" action="slip8.php">
			Enter String 1 :
			<input type="text" name="string1"><br>
			Enter String 2 :
			<input type="text" name="string2"><br>
			
			1.Find whether the small string appears at the start of the large string.<br>
			2.Find the position of the small string in the big string.<br>
			3.Compare both the string for first n characters, also the comparison should not be case sensitive.<br><br><br>
			Enter Choice:
			<input type="text" name="r"><br><br>  
			<input type="submit" value="submit">
		</form>
       </body>
</html>
<?php
	$s1=$_POST["string1"];
	$s2=$_POST["string2"];
	$ch=$_POST["r"];
	switch($ch)
	{
		case 1:$pos=strpos($s1,$s2);
			if($pos!=0)
			    echo("string 2 not present at the start of the string 1");
			else
			    echo("string 2 present at the start of the string 1");
			break;
		case 2:$pos=strpos($s1,$s2);
			echo("the position of the small string in the big string is ".$pos);
			break;
		case 3:$compare=strcasecmp($s1,$s2);
			if($compare==0)
				echo(" Both String are same");
			else
				echo(" Both String are NOT same");
			break;	
	}
?>