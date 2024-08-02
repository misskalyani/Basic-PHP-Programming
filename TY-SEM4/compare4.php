<?php
	$s1="RBNB bcs";
	$s2="rbnb bbaca";
	$k=strncmp($s1,$s2,3);
	if($k==0)
		echo("Strings are same");
	else if($k>0)
		echo("First String Greater");
	else if($k<0)
		echo("Second String Greater");

?>