













<?php
	$s1="rbnb college cdj college JTS college";
	$s2="college";
	$k=strpos($s1,$s2);
	if($k==false)
		echo("<br>Substring not found");
	else
		echo("<br>Substring found position=$k");

?>