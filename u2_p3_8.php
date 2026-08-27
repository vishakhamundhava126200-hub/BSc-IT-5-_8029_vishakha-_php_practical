<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array function</title>
</head>
<body>
<?php
    echo "<hr><h3>8 array_shift</h3>";
    $num = array(10,20,30,40);
    array_shift($num);
    print_r($num);
?>
</body>
</html>