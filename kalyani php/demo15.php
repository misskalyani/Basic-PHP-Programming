<html>
<body>
	<center>
	<table border="1px">
	<?php
		echo("Chess Board");
		$val=0;
		for($col=0;$col<7;$col++)
		{	
			echo("<tr>");
			$val=$col;
			for($row=0;$row<7;$row++)
			{
				if($val%2==1)
				{
					echo("<td height=20 width=20 bgcolor=black>");
					$val++;
				}
				else
				{
					echo("<td height=20 width=20 bgcolor=white>");
					$val++;
				}
			}
			echo("<tr>");
		}
	?>	
	</table>
	</center>
</body>
</html>