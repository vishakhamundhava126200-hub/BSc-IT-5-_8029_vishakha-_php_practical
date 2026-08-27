<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    $conn = new mysqli("localhost", "root", "", "studentdb",3307);
    $sql = "INSERT INTO students1(name,email,city)
    VALUES ('Riya','Riya@gmail.com','Rajkot')";
    if(mysqli_query($conn,$sql))
    {
        echo "Record Inserted successfully,";
    }
    else{
        echo "Error";
    }
    ?>
</body>
</html>