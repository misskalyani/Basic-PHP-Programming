<html>
 <body>
  <form method="post" action="#">
   Subject Code Of 5 subjests seperat by commas ,:
    <input type="text" name="t1"><br><br>
   Student Name Of 5 subjests seperat by commas ,:
    <input type="text" name="t2"><br><br>
   Student Marks Of 5 subjests seperat by commas ,:
    <input type="text" name="t3"><br><br>
   <input type="Submit">
  </form>
 </body>
</html>
<?php
  $a=$_POST["t1"];
  $b=$_POST["t2"];
  $c=$_POST["t3"];
  $sum=0;
  echo "<h1><center>Marksheet</center></h1>"; 
  $a1=explode(",",$a);
  $b1=explode(",",$b);
  $c1=explode(",",$c);
  echo "<center><table border=2>";
  echo("<tr>");
  echo("<th>Subject Code <th> Subject Name <th> MArks(100) </tr>");
  for($i=0;$i<5;$i++)
  {
    echo"<tr>";
      echo"<td> $a1[$i]</td>";
      echo"<td> $b1[$i]</td>";
      echo"<td> $c1[$i]</td>";
    echo"</tr>";
  }
  $t=array_sum($c1);
  $per=$t/5;
  echo"<tr><td colspan=2>Total Marks</td><td>$t</td>";
  echo"<tr><td colspan=2>Percentage</td><td>$per</td></tr>";
  echo"</center>";
?>