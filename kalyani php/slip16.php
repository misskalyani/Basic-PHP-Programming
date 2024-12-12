Q.1) Write a PHP script for the following: Design a form to accept the marks of 5 different 
subjects of a student, having serial number, subject name & marks out of 100. Display the 
result in the tabular format which will have total, percentage and grade. Use only 3 text 
boxes.(Use array of form parameters)
<html>
	<body>
		<form method="get" action="#">
		Enter Name :
		<input type="text" name="name"><br>
		Enter Roll No :
		<input type="text" name="roll"><br> 
		Enter 5 Subject Marks :
		Java
		<input type ="text" name="s1"><br>
		PHP
		<input type="text" name="s2"><br>
		DS
		<input type="text" name="s3"><br>
		TCS
		<input type="text" name="s4"><br>
		OS
		<input type="text" name="s5"><br><br><br>
		<input type="submit" value="submit">
		</form>
	</body>
</html>
<html>
<body>
<?php
	$rollno=explode(",",$_GET['roll']);
	$name=explode(",",$_GET['name']);
	$s1=explode(",",$_GET['s1']);
	$s2=explode(",",$_GET['s2']);
	$s3=explode(",",$_GET['s3']);
	$s4=explode(",",$_GET['s4']);
	$s5=explode(",",$_GET['s5']);
?>
	<center>
		<table border=1>
		<?php
			$c=count($rollno);
	echo("<tr><th>ROll No</th>
	<th>Name</th>
	<th>S1</th>
	<th>S2</th>
	<th>S3</th>
	<th>S4</th>
	<th>S5</th>
	<th>Total</th>
	<th>Per</th></tr>");
	for($i=0;$i<$c;$i++)
	{
		$t=$s1[$i]+$s2[$i]+$s3[$i]+$s4[$i]+$s5[$i];
		$p=$t/5;
		echo("<tr><td>" .$rollno[$i]."</td>
		<td>".$name[$i]."</td>
		<td>".$s1[$i]."</td>
		<td>".$s2[$i]."</td>
		<td>".$s3[$i]."</td>
		<td>".$s4[$i]."</td>
		<td>".$s5[$i]."</td>
		<td>".$t."</td>
		<td>".$p."</td></tr>");
	}
?>
</table>
</center>
</body>
</html>