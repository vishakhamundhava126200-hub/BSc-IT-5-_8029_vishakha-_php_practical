<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>date and time functions</title>
</head>
<body>
<?php
    $conn = new mysqli("localhost", "root", "", "test",3307);
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->conect_error);
    }
    $queries = [
        "SELECT HOUR(NOW()) AS Hour",
     "SELECT MINUTE(NOW()) AS Minute",
     "SELECT SECOND(NOW()) AS Second",
     "SELECT DATE_FORMAT(NOW()), '%D-%M-%Y
     %H:%I:%S') AS Formatted_Date",
     "SELECT DATE_SUB(CURDATE(), INTERVAL 10 DAY) AS Date_Substract",
     "SELECT DATE_ADD(CURDATE(), INTERVAL 10 DAY) AS Date_Add"
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