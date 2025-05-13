<html>
	<!--
		Q. 1) Create XML file named “Item.xml”with item-name, item-rate, item quantity Store the details of 5 
		Items of different Types 

		SLIP 6 madhi pn hych ahe

		Q. 1) Write PHP script to read  “book.xml” file into simpleXML object. Display attributes and elements . 
		( simple_xml_load_file() function ) 
		
		SLIP 15 madhi pn same ahe

		Q. 1) create a student.xml file containing at least 5 student information 

		..SLIP 24,SLIP 25,SLIP 26 same ahe 

		Q. 1) Write PHP script to read “book.xml” file into simpleXML object. Display attributes and elements . 
		( simple_xml_load_file() function ) 
		 
	--!>
</html>
<?php
	$xml=simplexml_load_file("s5.xml");
	echo "<table border='1'>";
		echo"<tr><th>Item Name</th>";
	    	echo" <th>ItemRate</th>";
		echo"<th>ItemQuantity</th></tr>";
	foreach($xml->Item as $item)
	{
		echo"<tr><td>".$item->ItemName."</td>";
		echo"<td>".$item->ItemRate."</td>";
		echo"<td>".$item->ItemQuantity."</td></tr>";
	}
echo"</table>";
?>