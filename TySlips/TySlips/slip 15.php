<html>
 <body>
  <form method="post" action="#">
   Enter String
    <input type="text" name="t1"><br><br>
   <input type="radio" name="r" value="a">
    first 5 words<br>
   <input type="radio" name="r" value="b">
    Lowercase And Title Case<br>
   <input type="radio" name="r" value="c">
   Padding Both Sides<br>
   <input type="radio" name="r" value="d">
   Remove Spaces<br>
   <input type="radio" name="r" value="e">
   Reverse The String<br><br>
   <input type="Submit" value="submit">
  </form>
 </body>
</html>
<?php
  $s1=$_POST["t1"];
  $ch=$_POST["r"];
  switch($ch)
  {
     case 'a':$a=explode(" ",$s1);
                 for($i=0;$i<5;$i++)
                   echo($a[$i]." ");
                 break;
     case 'b':$l=strtolower($s1);
              $w=ucwords($s1);
              echo("Lowercase=".$l);
              echo("Titlecase=".$w); 
              break;
     case 'c':$p=str_pad($s1,strlen($s1)+2,"*",STR_PAD_BOTH);
              echo("Padding=".$p);
              break;
     case 'd':$w=trim($s1);
              echo("Remove White Spaces=".$w);
              break;
     case 'e':$r=strrev($s1);
              echo("Reverse STring=".$r);
              break; 
  }
?>