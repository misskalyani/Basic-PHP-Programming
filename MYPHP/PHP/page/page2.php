<html>
<body>
	<?php
		$rno=$_POST["t1"];
		$name=$_POST["t2"];
		setcookie('rno',$rno);
		setcookie('name',$name);
		echo("Cookies are set");
	?>
	<form action="page3.php" method="post">
		Enter Subjet 1 Mark :
		<input type="text" name="s1"><br>
		Enter Subjet 2 Mark :
		<input type="text" name="s2"><br>
		Enter Subjet 3 Mark :
		<input type="text" name="s3"><br>
		<input type="submit" value="send"><br>

	</form>
</body>
</html>
