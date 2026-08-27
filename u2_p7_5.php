<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>String manipualtion functions</title>
</head>
<body>
<?php
    $conn = new mysqli("localhost", "root", "", "test",3307);
    if ($conn->connect_error)
    {
        die("Connection failed: " . $conn->conect_error);
    }
    $queries = [
        "SELECT LPAD('PHP',8,'*') AS LPad,
                RPAD('PHP',8,'*') AS RPad,
                LOCATE('SQL','MySQL Database') AS Locate"

        ];

        foreach($queries as $sql){
            echo "<br>";
            $result=$conn->query($sql);
            if($result){
                while($row=$result->fetch_assoc()){
                    foreach($row as $key => $value){
                        echo "<b>$key :</b> $value <br>";
                    }
                }
            }
            else{
                echo "Query Error";
            }

        }

    ?>
</body>
</html>