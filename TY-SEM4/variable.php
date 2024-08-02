<?php
$a=10;//$a is a variable
$b=&$a;//$b is reference variable
unset($a);//Original Variable Delete
echo("<br>Value=".$a);
echo("<br>Value=".$b);//when Original Varibale delete then does not affect to the reference variable
?>