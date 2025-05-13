<html>
<body>
	<?php
		$rno=$_COOKIE["rno"];
		$nm=$_COOKIE["name"];
		$sub1=$_POST["s1"];
		$sub2=$_POST["s2"];
		$sub3=$_POST["s3"];
		$t=$sub1+$sub2+$sub3;
		$a=$t/3;
		echo"Student Detials <br>";
		echo "Roll No :$rno<br>";
		echo "Name :$nm<br>";
		echo "Subject 1 Mark :$sub1<br>";
		echo "Subject 2 mark :$sub2<br>";
		echo "Subject 3 Mark :$sub3<br>";
		echo "Total :$t<br>";
		echo "Average :$a<br>";

	?>
</body>
</html>
