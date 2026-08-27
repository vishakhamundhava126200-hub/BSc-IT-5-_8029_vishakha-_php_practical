<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database connection</title>
</head>
<body>
<?php

    $conn = new mysqli("localhost", "root", "", "studentdb", 3307);
    
  
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    
    $sql = "CREATE TABLE IF NOT EXISTS students1 (
        id INT AUTO_INCREMENT PRIMARY KEY,
        name VARCHAR(50) NOT NULL,
        email VARCHAR(50),
        city VARCHAR(30)
    )";

    // Executed the complete SQL statement
    if(mysqli_query($conn, $sql)){
        echo "Table created successfully";
    }
    else{
        echo "Error: ". $conn->error;
    }
    
    $conn->close();
?> 
</body>
</html>
