<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Type conversion</title>
</head>
<body>
<?php
    $var = "12345";
    echo "<b> Original Value: </b> ".$var . "</br>";
    echo "<b> Original Data type: </b> ".gettype($var) . "</br><br>";

    settype($var,"integer");
    echo "<b> after type casting:</b> " . $var . "<br>";
    echo "<b>new Data type: </b> ".gettype($var) . "</br><br>";
    settype($var,"double");
    echo "<b> after Converting to double: </b>" . $var . "<br>";
    echo "<b> Data type: </b> ".gettype($var) . "</br><br>";
    settype($var,"boolean");
    echo "<b> after Converting to boolean: </b>" . $var . "<br>";
    var_dump($var);
    echo  "<br><b> Data type:</b> " .gettype($var);
?>

</body>
</html>