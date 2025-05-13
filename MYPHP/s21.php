<html>
	<!--
			Q. 1) Write a PHP script for the following: Design a form to accept a number from the user. Perform 
			the  operations and show the results. 
			1) Fibonacci Series. 
			2) To find sum of the digits of that number. 
			(Use the concept of self processing page.) 

			SLIP 22 same ha Question ahe
	--!>
</html>
<?php
function fibonacciSeries($n) {
    $fib = [0, 1];
    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }
    return array_slice($fib, 0, $n);
}

function sumOfDigits($num) {
    return array_sum(str_split($num));
}
?>

<html>
<head>
    <title>PHP Self Processing Form</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        Enter a Number:
        <input type="number" name="number" >
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $num = intval($_POST['number']);
        
        echo "<h3>Results:</h3>";
        echo "<p>Fibonacci Series: " . implode(", ", fibonacciSeries($num)) . "</p>";
        echo "<p>Sum of Digits: " . sumOfDigits($num) . "</p>";
    }
    ?>
</body>
</html>
