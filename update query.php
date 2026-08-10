<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Delete</title>
</head>
<body>
    <form method="POST">
        Id : <input type="number" name="id"><br><br>
        <input type="submit" value="Delete">
    </form>
</body>
</html>

<?php

    include 'database.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $id=$_POST["id"];

    $sql="delete from sign_up where id=$id";
    mysqli_query($conn,$sql);

    echo "Record Deleted";
    }

?>