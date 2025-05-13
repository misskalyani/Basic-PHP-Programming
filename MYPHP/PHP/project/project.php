<?php
	 $xml = simplexml_load_file("project.xml") or die("Unable to load XML file");
	
	
		echo"<table border= 1 >";
		
		echo"<tr><th>ProjectId</th>
			 <th>ProjectName</th>
			 <th>StartDate</th>
			 <th>DeadLine</th>
				      </tr>";
		foreach($xml->project as $p)
		{
			echo'<tr><td>'.$p->pid.'</td>';
			echo'<td>'.$p->pnm.'</td>';
			echo'<td>'.$p->sdate.'</td>';
			echo'<td>'.$p->deadline.'</td></tr>';
		}
		
	
	echo"</table>";
?>

