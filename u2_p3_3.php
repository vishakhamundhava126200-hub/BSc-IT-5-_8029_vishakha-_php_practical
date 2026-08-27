<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array function</title>
</head>
<body>
<?php
    echo "<h3>3 array_count_values() </h3>";
    $colors = array("Red","Blue","Red","Green","Blue","Red");
    print_r(array_count_values($colors));
?>
</body>
</html>