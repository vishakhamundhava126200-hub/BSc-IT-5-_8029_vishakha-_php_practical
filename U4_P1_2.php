<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Database connection</title>
</head>
<body>
<?php
   $conn = new PDO("mysql:host=127.0.0.1;port=3307;dbname=studentdb","root","");

    echo "Connected successfully";
   
?> 
</body>
</html>