<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array function</title>
</head>
<body>
<?php
    echo "<h3>2 array_chunk() </h3>";
    $months = array("January","February","march","April","May","June","July","August","September","October","November","December");
    print_r(array_chunk($months,3,"<br>"));
?>
</body>
</html>