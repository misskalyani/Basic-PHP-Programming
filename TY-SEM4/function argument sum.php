<?php
	function add()
	{
		echo("<br><br>Number Of arguments : ".func_num_args());
		echo("<br>All Values : ");
		$a=func_get_args();
		print_r($a);
		$s=0;
		for($i=0;$i<func_num_args();$i++)
			$s=$s+func_get_arg($i);
		echo("<br>Addition = ".$s);
	}
	add(11,22);
	add(67,82,19,20,22);
	add(100,56,89,9,23,45,5,43,6);

?>