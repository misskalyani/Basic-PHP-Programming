<?php
	function count_vowels($s)
	{
		$c=0;
		for($i=0;$i<strlen($s);$i++)
		{
			if($s[$i]=='a' ||$s[$i]=='e' ||$s[$i]=='i' ||$s[$i]=='o' || $s[$i]=='u')
			{
				$c=$c+1;
			}
		}
		echo("<br> Total Vowels Count = ".$c);
	}
	count_vowels('Shrirampur');
?>