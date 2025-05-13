<html>
	<body>
		<table border=1>

		<?php
		$xml = simplexml_load_file('emp.xml') or die("Unable to load XML");
		echo'<tr><th>empno</th>
			<th>name</th>
			<th>salry</th>
			<th>des</th>
     		     </tr>';
		
		foreach($xml as $emp)
		{
			echo'<tr><td>'.$emp->eno.'</td>';
			echo'<td>'.$emp->enm.'</td>';
			echo'<td>'.$emp->sal.'</td>';
			echo'<td>'.$emp->des.'</td></tr>';		
		}
		?>
		</table>
	</body>
</html>