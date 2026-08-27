<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>array function</title>
</head>
<body>
<?php
    echo "<h3>1  array_change_key_case() </h3>";
    $var = [
        "Name" => "John",
        "AGE" => 25,
        "City" => "London"
    ];
    print_r(array_change_key_case($var,CASE_LOWER));
    print_r(array_change_key_case($var,CASE_UPPER));
?>
</body>
</html>