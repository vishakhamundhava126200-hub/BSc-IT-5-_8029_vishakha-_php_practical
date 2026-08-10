<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update</title>
</head>
<body>

    <form method="POST">
        Id : <input type="number" name="id"><br><br>
        New Password : <input type="password" name="password"><br><br>
        Confirm Password : <input type="password" name="cpassword"><br><br>
        <input type="submit" value="Update">

    </form>
    
</body>
</html>

<?php
    
    include 'database.php';

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $id=$_POST["id"];
        $password=$_POST["password"];
        $cpassword=$_POST["cpassword"];

        if($password==$cpassword){

            $sql="UPDATE sign_up SET Password='$password' WHERE ID=$id";
            mysqli_query($conn,$sql);
        }
    }
?>