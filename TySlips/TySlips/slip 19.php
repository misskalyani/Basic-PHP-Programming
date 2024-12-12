<html>
 <body>  
  <form method="post" >
     Enter Big String:
      <input type="text" name="t1"><br>
     Enter Small String:
      <input type="text" name="t2"><br>
     Enter Choice:
      <input type="text" name="ch"><br>
      1.Delete small part of first string after accepting position and number of characters to remove.<br>
      2.Insert given small string in the given big string at specified position without removing any character form big string. <br>
      enter position :<input type="number" name="p"><br>
      3.Replace some characters/words from given big string with the given small string at specified position<br><br>
      <input type="submit" value="submit"><br>
  </form>
 </body>
</html>
<?php
$str1=$_POST["t1"];
$str2=$_POST["t2"];
$ch=$_POST["ch"];
$pos=$_POST['p'];

switch($ch)
{
    case 1:$result=str_replace($str2," ",$str1);
           echo $result;
           break;
    case 2:$result=substr_replace($str1,$str2,$pos,0);
           echo $result;
           break;       
    case 3:$result=substr_replace($str1,$str2,0,2);
           echo $result;
           break;
}
?>