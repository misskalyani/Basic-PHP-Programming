<html>
 <body>

Q.1) Design an HTML form to accept two strings from the user. Write a PHP script for the
following.
a. Find whether the small string appears at the start of the large string.
b. Find the position of the small string in the big string.
c. Compare both the string for first n characters, also the comparison should not be case
sensitive

  
   <form method="post" action="#">
     Enter First String
      <input type="text" name="t1"><br><br>
     Enter Second String
      <input type="text" name="t2"><br><br>
      <input type="radio" name="r" value="r1">
     The Small String Appears At The Start Of The Large String<br>
      <input type="radio" name="r" value="r2">
     The Position Of The Small String In The Big String<br>
      <input type="radio" name="r" value="r3">
     Compare Both The String For First N Characters
      <input type="text" name="t3"><br><br>       
      <input type="Submit">
   </form>   
 </body>
</html>
<?php
  $s1=$_POST["t1"];
  $s2=$_POST["t2"];
  $ch=$_POST["r"];
  switch($ch)
  {
     case 'r1':$pos=strpos($s1,$s2);
               if($pos==0)
                 echo"The Small String Appears At The Start Of Large String";
               else
                 echo"The Small String Does Not Appears At The Start Of Large String";
             break;
     case 'r2':$pos=strpos($s1,$s2);
                if($pos==false)
                echo("Nahi sapadli....");
               else
               echo"The Small String Appears at $pos Position";
               break;
     case 'r3':  $n=$_POST["t3"];
                     $k=strncasecmp($s1,$s2,$n);
                      if($k==0)
                          echo("Same first $n char");
                      if($k>0)
                          echo("first  String Greater");
                      if($k<0)
                          echo("Second  String Greater");



               break;    
  }
?>