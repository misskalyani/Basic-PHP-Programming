<?php
	$f1=fopen("item.txt","r");
	if($f1==false)
	{
		die("Error in File");
	}
	echo("<table border ='1'>");
	echo("<tr><th>Item Code");
	echo("<th>Item Name <th> Unit <th> Rate <th> Total </tr>");
	$sum=0;
	while(!feof($f1))
	{
		$s=fgets($f1);
		$a=explode(" ",$s);
		echo("<tr> <td>$a[0] <td>$a[1] <td>$a[2]<td>$a[3]");
		echo("<td>".($a[2]*$a[3]));
		echo("</tr>");
		$sum=$sum+($a[2]*$a[3]);
	}
	echo("<tr> <td colspan=4 > Total Amount <td> $sum");
	echo("</tr> </table>");
?>