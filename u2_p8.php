<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Date and time functions</title>
</head>
<body>
<?php
    $conn = new mysqli("localhost", "root", "", "test",3307);
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->conect_error);
    }
    $queries =[
     "SELECT DAYOFWEEK(CURDATE()) AS Dayofweek",
     "SELECT WEEKDAY(CURDATE()) AS WeekDay",
     "SELECT DAYOFMONTH(CURDATE()) AS Dayofmonth",
     "SELECT DAYOFYEAR(CURDATE()) AS Dayofyear",
     "SELECT DAYNAME(CURDATE()) AS DayName",
     "SELECT MONTH(CURDATE()) AS MonthNumber,
            MONTHNAME(CURDATE()) AS MonthName",
    "SELECT WEEK(CURDATE()) AS WeekNumber,
            NOW() AS CurrentDateTime",
    "SELECT SYSDATE() AS SystemDateTime,
            CURRENT_TIMESTAMP() AS CurrentTimeStamp"
    ];

    foreach($queries as $sql)
    {
        echo "<br>";
        $result = $conn->query($sql);
        if($result)
        {
            while($row = $result->fetch_assoc())
            {
                foreach($row as $key => $value)
                {
                    echo "<b>$key :</b> $value <br>";

                }
            }
        }
    }
?>
</body>
</html>