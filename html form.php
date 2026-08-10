<?php

function calculator($num1, $num2, $op)
{
    switch ($op) {
        case "+":
            return $num1 + $num2;
        case "-":
            return $num1 - $num2;
        case "*":
            return $num1 * $num2;
        case "/":
            if ($num2 != 0)
                return $num1 / $num2;
            else
                return "Division by zero is not allowed!";
        default:
            return "Invalid Operator!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="post">
    Enter First Number:
    <input type="number" name="num1" required><br><br>

    Enter Second Number:
    <input type="number" name="num2" required><br><br>

    Select Operator:
    <select name="operator">
        <option value="+">Addition (+)</option>
        <option value="-">Subtraction (-)</option>
        <option value="*">Multiplication (*)</option>
        <option value="/">Division (/)</option>
    </select><br><br>

    <input type="submit" name="submit" value="Calculate">
</form>

<?php
if (isset($_POST['submit'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operator = $_POST['operator'];

    $result = calculator($num1, $num2, $operator);

    echo "<h3>Result: $result</h3>";
}
?>

</body>
</html>