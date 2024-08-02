<html>
<body>
	<form method="post" action="#">
	Enter String :
	<input type="text" name="t1"><br>
	<input type="submit" value="OK">
	</form>
</body>
</html>
<?php
	$s=$_POST["t1"];
	$count_vowels($s);
	palindrome($s);
	function count_vowels($s)
	{
		$c1=0,$c2=0,$c3=0,$c4=0,$c5=0;
		for($i=0;$i<strlen($s);$i++)
		{
			if($s[i]=='a' ||$s[i]=='A')
				$c1=$c1+1;
								if($s[i]=='e' ||$s[i]=='E')
				$c2=$c2+1;
								if($s[i]=='i' ||$s[i]=='I')
			$c3=$c3+1;
								if($s[i]=='o' ||$s[i]=='O')
			$c4=$c4+1;
								if($s[i]=='u' ||$s[i]=='U')
			$c5=$c5+1;
		}
		echo("<br> a count = ".$c1);
		echo("<br> e count = ".$c2);
		echo("<br> i count = ".$c3);
		echo("<br> o count = ".$c4);
		echo("<br> u count = ".$c5);

	}
	function palindrome($s)
	{
		$f=0;
		for($i=0;$j=strlen($s)-1;$i<strlen($s);$i++,$j--)
		{
			if($s[$i]!=$s[$j])
			{
				$f=1;
				break;
			}
		}
		if($f==0)
			echo("String is pallindrome");
		else
			echo("String is not pallindrome");	
	}
?>