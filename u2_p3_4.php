<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array function</title>
</head>
<body>
<?php
    echo "<h3>4 array_combine() </h3>";
    $keys = array("Name","City","Age");
    $values = array("Trushita","Rajkot",20);
    print_r(array_combine($keys,$values));
?>
</body>
</html>