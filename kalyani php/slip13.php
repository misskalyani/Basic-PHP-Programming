Q.1) Write a PHP script to create a chess board using CSS on table cells. 
<html>
<body>
	<center>
	<table border="1px">
		<?php
		echo("Chess Board");
		$value=0;
		for($col=0;$col<8;$col++)
		{
			echo("<tr>");
			$value=$col;
			for($row=0;$row<8;$row++)
			{
				if($value%2==0)
				{
					echo("<td height=20px width=20px bgcolor=black></td>");
					$value++;
				}
				else
				{
					echo("<td height=20px width=20px bgcolor=white></td>");							
					$value++;
				}
			}
			echo("</tr>");
		}
		?>
	</table>
	</center>
</body>
</html>
