<?php
		$xml = simplexml_load_file('item.xml') or die("Unable to load XML");
		echo"<table border=1>";
		echo'<tr><th>Ino</th>
			<th>Iname</th>
			<th>Desc</th>
			<th>Price</th>
     		     </tr>';
		
		foreach($xml->Item as $a)
		{
			echo'<tr><td>'.$a->Ino.'</td>';
			echo'<td>'.$a->Inm.'</td>';
			echo'<td>'.$a->desc.'</td>';
			echo'<td>'.$a->price.'</td></tr>';		
		}
		echo"</table>"
?>
