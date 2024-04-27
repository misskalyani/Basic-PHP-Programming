<?php
	for($n1=1;$n1<=500;$n1++)
	{
		$n=$n1;
		$s=0;
		while($n>0)
		{
			$d=$n%10;
			$s=$s+($d*$d*$d);
			$n=$n/10;
		}
		if($s==$n1)
		echo("<br>Armstrng=".$n1);
	}
	
?>