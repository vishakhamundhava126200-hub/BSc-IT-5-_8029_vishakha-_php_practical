<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>calculator</title>
</head>
<body>
    <form method = "post">
    <h3> Calculator </h3>

    Enter a number: 
    <input type="number" name="num1" id=n1>
    <br> </br>

    Enter second number: 
    <input type="number" name="num2" id=n2>
    <br> </br>

    Select operation: <select name = "operation">
                        
                        <option value="Addition">Addition</option>
                        <option value="Substraction">Substraction</option>
                        <option value="Multiplication">Multiplication</option>
                        <option value="Division">Division</option>
                        </select>
    <br> </br>
    
    <input type="submit" name="Submit" id=s1>
</form>

<?php
    function calculate($num1 , $num2 ,$op)
    {
        switch($op)
        {
            case 'Addition':
                return $num1 + $num2;

            case 'Substraction':
                return $num1 - $num2;
            
            case 'Multiplication':
                return $num1 * $num2;

            case 'Division':
                return $num2 != 0 ? $num1 / $num2 : "Cannot divide by zero";
            
            default:
                return "Invalid Operation";
        }
    }
    if (isset($_POST['Submit']))
    {
        $n1 = $_POST['num1'];
        $n2 = $_POST['num2'];
        $op = $_POST['operation'];

        $result = calculate($n1, $n2 , $op);
        echo "<h3> Result: $result </h3>";
    }
?>





    
</body>
</html>