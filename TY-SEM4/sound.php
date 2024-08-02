<?php
	$s1="sun";
	$s2="son";
	if(soundex($s1)==soundex($s2))
		echo("Strings are same");
	else
		echo("Strings Are NOT same");
?>