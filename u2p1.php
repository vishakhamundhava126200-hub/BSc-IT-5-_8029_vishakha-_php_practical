<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<?php

// Numeric array: Monday to Saturday
$weekDays = [
    'Monday',
    'Tuesday',
    'Wednesday',
    'Thursday',
    'Friday',
    'Saturday'
];

// Associative array: Month => Total Days
$months = [
    'January'   => 31,
    'February'  => 28, // Use 29 for leap years
    'March'     => 31,
    'April'     => 30,
    'May'       => 31,
    'June'      => 30,
    'July'      => 31,
    'August'    => 31,
    'September' => 30,
    'October'   => 31,
    'November'  => 30,
    'December'  => 31
];

print_r($weekDays);
print_r($months);

?>
</body>
</html>