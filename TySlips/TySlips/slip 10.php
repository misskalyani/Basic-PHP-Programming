<html>
 <body>
  <form method="post" action="#">
   Enter First Number
     <input type="text" name="t1"><br><br>
   Enter Second Number
     <input type="text" name="t2"><br><br>
   Enter Your Choice
     <input type="number" name="t3"><br><br>
     a. Find mod of the two numbers <br>
     b. Find the power of first number raised to the second <br>  
     c. Find the sum of first n numbers <br>  
     d. Find the factorial of second number <br><br>  
   <input type="Submit">
  </form>
 </body>
</html>

<?php
  $n1=$_POST["t1"];
  $n2=$_POST["t2"];
  $ch=$_POST["t3"];
  switch($ch)
  {
    case 1:$c=mod($n1,$n2);
           Echo("Mod Of Two Numbers=".$c);
           break;
    case 2:$power=power($n1,$n2);
           Echo("Power=".$power);
           break;
    case 3:$s=sum($n1); 
           Echo("Sum of Numbers=".$s); 
           break;
    case 4:$f=fact($n2); 
           Echo("Factorial of Second Numbers=".$f); 
           break; 
  }
  function mod($n1,$n2)
  {
    $c=$n1%$n2;
    return $c; 
  }
  function power($n1,$n2)
  {
    $power=1;
    for($i=1;$i<=$n2;$i++)
      $power=$power*$n1;
      return $power;
  }
  function sum($n1)
  {
    $s=0;
    for($i=1;$i<=$n1;$i++)
      $s=$s+$i;
      return $s;
  }
  function fact($n2)
  {
    $f=1;
    for($i=1;$i<=$n2;$i++)
      $f=$f*$i;
      return $f;
  }
?>