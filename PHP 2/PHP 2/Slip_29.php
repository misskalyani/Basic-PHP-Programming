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

<!DOCTYPE html>
<html>
<head>
    <title>PHP Self Processing Form</title>
</head>
<body>
    <form method="post" action="<?php echo $_SERVER['PHP_SELF']; ?>">
        <label>Enter a Number:</label>
        <input type="number" name="number" required>
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
