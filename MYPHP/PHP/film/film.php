<html>
	<h1>Film Details of specific actor</h1>
	<table border=1>
		<tr><th>Film Number</th>
		    <th>Name Of Film</th>
		    <th>Name Of Director</th>
	            <th>Name Of Producer</th>
		    <th>Release Year</th>
		    <th>Actor Name</th>
		    <th>Budget</th>
	        </tr>
		<?php
			$name=$_POST["t1"];
			$finfo=simplexml_load_file("film.xml") or die("Unable to open file");
			foreach($finfo->film as $f)
			{
				if($f->an ==$name)
				{
					echo'<tr><td>'.$f->fno.'</td>';
					echo'<td>'.$f->fnm.'</td>';
					echo'<td>'.$f->dnm.'</td>';
					echo'<td>'.$f->pnm.'</td>';	
					echo'<td>'.$f->ry.'</td>';
					echo'<td>'.$f->an.'</td>';
					echo'<td>'.$f->bget.'</td></tr>';
				}
			}
		?>	
	</table>
</html>