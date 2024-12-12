<html>
 <body>
  <form method="post" action="#">
   Enter Your Choice
     <input type="number" name="t1"><br><br>
     a.Reverse the order of each elements key-value pair <br>
     b.Traverse the element in an array in random order <br>
     c.Convert the array elements into individual variables <br> 
     d.Display the elements of an array along with key <br><br>  
   <input type="Submit">
  </form>
 </body>
</html>
<?php
  $a=Array("Sagar"=>"31","Vicky"=>"41","Leena"=>"39","Ramesh"=>"40");
  $ch=$_POST["t1"];
  switch($ch)
  {
    case 1:$s=array_flip($a);
           print_r($s);
           break;
    case 2:shuffle($a);
           print_r($a);
           break;
    case 3:extract($a);
           echo("<br>First Value=".$Sagar);
           echo("<br>second Value=".$Vicky);
           echo("<br>Third Value=".$Leena);
           echo("<br>last Value=".$Ramesh);
           break;
    case 4:print_r($a);  
           break; 
  }
?>