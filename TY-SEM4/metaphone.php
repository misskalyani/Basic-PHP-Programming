<?php
	$s1="no";
	$s2="know";
	if(metaphone($s1)==metaphone($s2))
		echo("Strings are same");
	else
		echo("Strings Are NOT same");
?>