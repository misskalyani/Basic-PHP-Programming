<html>
 <body>
  <form  method="post" action="#">
    Enter String
     <input type="text" name="t1"><br><br>
    Choose Seperator
    <select name="t2">
     <option value="@">@</option>
     <option value="#">#</option>
     <option value=",">,</option>   
    </select><br><br>
    <input type="radio" name="r1" value="a">
     Split The String Into Separate Words<br>
    <input type="radio" name="r1" value="b">
     Replace All The Occurrences Of Separator with:*<br>
    <input type="radio" name="r1" value="c">   
     The Last Word In The Given String<br><br>
    <input type="submit"> 
  </form>
 </body>
</html>

<?php
   $str=$_POST["t1"];
   $sep=$_POST["t2"];
   $ch=$_POST["r1"];   
   switch($ch)
   {
      case 'a': $a=explode($sep,$str);
                   print_r($a);         
               break;
      case 'b':$s1=str_replace($sep,"*",$str);
               echo "After Chainging Separators<br>".$s1;
               break;
      case 'c':$a=explode($sep,$str);
               $res=end($a);
               echo "Last Word=".$res;
               break;
   }
?>