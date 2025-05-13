<html>
<body>
<table border= 1 >
<?php
	if(! $xml = simplexml_load_file("book.xml"))
	{
		echo("Unable to load XML file");
	}
	else
	{
		echo $xml->getName()."<br>";
		
		echo"<tr><th>BookCode</th>
			 <th>BookName</th>
			 <th>Author</th>
			 <th>Publisher</th>
			 <th>Price    </th>
				      </tr>";
		foreach($xml->children() as $child)
		{
			echo"<tr>";
			
			foreach($child->children() as $innerchild)
			{
				echo "<td>".$innerchild."</td>";
			}
			echo"</tr>";
		}
		
	}
?>
</table>
</body>
</html>