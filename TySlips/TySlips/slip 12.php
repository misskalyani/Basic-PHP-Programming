<html>
 <body>
  <form method="post" action="#">
   Enter First Number
    <input type="text" name="t1"><br><br>
   Enter Second Number
    <input type="text" name="t2"><br><br>
   <input type="radio" name="r" value=1>
   Addition<br>
   <input type="radio" name="r" value=2>
   Substraction<br>
   <input type="radio" name="r" value=3>
   Multiplication<br>
   <input type="radio" name="r" value=4>
   Division<br><br>
   <input type="Submit" value="submit">
  </form>
 </body>
</html>

<?php

  $n1=$_POST["t1"];
  $n2=$_POST["t2"];
  $ch=$_POST["r"];
  switch($ch)
  {
     case 1:$add=$n1+$n2;
            echo("Addition=".$add);
            break;
     case 2:$sub=$n1-$n2;
            echo("Substraction=".$sub);
            break;
     case 3:$mul=$n1*$n2;
            echo("Multiplication=".$mul);
            break;
     case 4:$div=$n1/$n2;
            echo("Division=".$div);
            break; 
  }
?>