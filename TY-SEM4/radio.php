<html>
<body>
	<form method="post" action="#">
	Enter String : 
	<input type="text" name="t1"><br>
	<input type="radio" name="r1" value="aa">
	Length Of String<br>
	<input type="radio" name="r1" value="bb">
	Vowels Count<br>
	<input type="radio" name="r1" value="cc">
	Lower & TitleCase<br>
	<input type="radio" name="r1" value="dd">
	padding both side<br>
	<input type="radio" name="r1" value="ee">
	Remove Spaces<br>
	<input type="radio" name="r1" value="ff">
	Reverse String<br>
	<input type="submit"><br>
	</form>
</body>
</html>
<?php
	$s=$_POST["t1"];
	$ch=$_POST["r1"];
	switch($ch)
	{
		case "aa":echo("<br>String Length : ".strlen($s));
			  break;
		case "bb":vowels_count($s);
			  echo("<br>Vowels Count : ".$s);
			  break;
		case "cc":echo("<br>Lowercase String : ".strtolower($s));
			  echo("<br>Title  String : ".ucwords($s));

			  break;
		case "dd":$s1=str_pad($s,15,"*",STR_PAD_BOTH);
			  echo("<br>Padding String : ".$s1);
			  break;
		case "ee":$s1=trim($s);
			  echo("<br>Remove Spaces : ".$s1);
			  break;
		case "ff":$s1=strrev($s);
			  echo("<br>Reverse String : ".$s1);
			  break;
		default  :echo("Invalid Choice");


	}
?>