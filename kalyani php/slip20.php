Q.1)Write a menu driven program to perform the following operations on associative arrays: 
a) Split an array into chunks 
b) Sort the array by values without changing the keys. 
c) Filter the even elements from an array.
<html>
    <body>
        <form method="POST" action="#">
           	a) Split an array into chunks <br>
		b) Sort the array by values without changing the keys. <br>
		c) Filter the even elements from an array.<br>

            Enter choice:<input type="text" name="c"><br>
            <input type="submit" value="submit"><br>
	</form>
   </body>
</html>
<?php
	$a=array("a"=>1,"b"=>6,"c"=>7,"d"=>4,"e"=>5,"f"=>3);
	$ch=(int)$_POST["c"];
	switch($ch)
	{
    		case 1:$chunk=array_chunk($a,2);
           		print_r($chunk) ;
           		break;
	        case 2:asort($a);
           		print_r($a) ;
           		break;   
    		case 3:print_r(array_filter($a,'is_even'));
           		break;
    }
    function is_even($var)
    {
    	if($var%2==0)
    	return $var;
    }
?>