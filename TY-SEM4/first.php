<html>
<body>
	<form method="post" action="first.php">
	Enter Day:
	<input type="text" name="t1"><br>
	<input type="submit" value="OK">
	</form>
</body>
</html>
<?php
	$d=$_POST["t1"];
	switch($d)
	{
		case "monday":echo("<body bgcolor='red'>");
			       break;
		case "sunday":echo("<body bgcolor='pink'>");
			       break;

		case "tuesday":echo("<body bgcolor='yellow'>");
			       break;
		case "wednesday":echo("<body bgcolor='blue'>");
			       break;

		case "friday":echo("<body bgcolor='black'>");
			       break;
		case "thursday":echo("<body bgcolor='white'>");
			       break;
		case "saturday":echo("<body bgcolor='yellow'>");
			       break;



	}
?>