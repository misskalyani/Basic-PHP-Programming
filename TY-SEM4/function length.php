<?php
	function string_length($s)
	{
		for($i=0;isset($s[$i]);$i++);
		return $i;
	}
	echo("Length Of String - ".string_length("rbnb"));
?>