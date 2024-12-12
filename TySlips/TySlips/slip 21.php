Q.1) Create an array of 15 high temperatures, approximating the weather for a spring month,
then find the average high temp, the five warmest high temps Display the result on the browser.
<body>
	<br>
	<br>
</body>
<?php
	$a=array(32,34,35,37,22,15,39,55,64,44,43,23,42,41,35);
	print_r($a);
	echo("<br><br> higesh temp : ".max($a));
	$avg=array_sum($a) / count($a);
	echo("<br> avreage temp : ".$avg);
	for ($i=0; $i <5; $i++) 
	{ 
		echo "<br> $a[$i]";
	}
?>