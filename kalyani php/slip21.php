Q.1) Create an array of 15 high temperatures, approximating the weather for a spring month, 
then find the average high temp, the five warmest high temps Display the result on the browser.
<?php
	$hightemp=array(56,32,45,12,98,32,80,65,70,99,50,33,81,12);
	$count=count($hightemp);
	$total=0;
	foreach($hightemp as $h)
	{
		$total+=$h;
	}
	$avg=round($total/$count);
	echo("the average high temp = ".$avg."&deg F");
	rsort($hightemp);
	$toptemp=array_slice($hightemp,0,5);
	echo("<br>the five warmest high temps ");
	foreach($toptemp as $t)
	{
		echo("<br>".$t."&deg F");
	}
?>