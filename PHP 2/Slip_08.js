<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>JavaScript Alert and Prompt</title>
</head>
<body>
    <script>
        alert("Exams are near, have you started preparing?");

        let num1 = prompt("Enter the first number:");
        let num2 = prompt("Enter the second number:");

        num1 = parseFloat(num1);
        num2 = parseFloat(num2);

        if (!isNaN(num1) && !isNaN(num2)) {
            let sum = num1 + num2;
            let confirmResult = confirm("Do you want to see the sum?");
            if (confirmResult) {
                alert("The sum of " + num1 + " and " + num2 + " is: " + sum);
            } else {
                alert("You chose not to see the result.");
            }
        } else {
            alert("Invalid input. Please enter valid numbers.");
        }
    </script>
</body>
</html>
