<?php
	$u=$_GET["t1"];
	$p=$_GET["t2"];
	if($u=="rbnb" && $p=="bcs")
		echo("Login Succesfully");
	else
		echo("Invalid User Name & Password");