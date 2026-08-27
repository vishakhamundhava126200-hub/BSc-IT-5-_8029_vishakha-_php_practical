<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database connection</title>
</head>
<body>
<?php
    
    $servername = "localhost";
    $username = "root";
    $password = "";
    $database = "studentdb";
    
    $conn = new mysqli($servername, $username, $password, $database,3307);
    /*
    $conn = new mysqli("localhost", "root", "", "studentdb",3307);
    */
    if ($conn)
    {
        echo "Database connected successfully.";
    }
    else
    {
        die("Connection failed: " .mysqli_conect_error());
    }
    /*
    if(!conn)
    {
         die("Connection failed: " .mysqli_conect_error());
    }
    else
    {
         echo "Database connected successfully.";
    }
    */
    $conn->close();
?> 
</body>
</html>