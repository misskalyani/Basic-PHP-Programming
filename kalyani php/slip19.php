Q.1)Write a PHP script to accept 2 strings from the user, the first string should be a sentence and 
second can be a word. 
a. Delete a small part from first string after accepting position and number of characters to 
remove. 
b. Insert the given small string in the given big string at specified position without removing 
any characters from the big string. 
c. Replace some characters/ words from given big string with the given small string at 
specified position.
<html>
    <body>
        <form method="post" action="slip19.php">
            Enter big string:<input type="text" name="t1"><br>
            Enter small string:<input type="text" name="t2"><br>
            1.Delete small part of first string after accepting position and number of characters to remove.<br>
            2.Insert given small string in the given big string at specified position without removing any character form big string. <br>
            3.Replace some characters/words from given big string with the given small string at specified position.<br>
            Enter choice:<input type="text" name="ch"><br>
            <input type="submit" value="submit"><br>
</form>
</body>
</html>

<?php
$str1=$_POST["t1"];
$str2=$_POST["t2"];
$ch=$_POST["ch"];

switch($ch)
{
    case 1:$result=str_replace($str2," ",$str1);
           echo $result;
            break;

    case 2:$pos=strpos($str1,$str2);
        $result=substr_replace($str1,$str2,$pos,0);
    echo $result;
    break;

       
    case 3:$result=substr_replace($str1,$str2,0,2);
    echo $result;
    break;
}
?>