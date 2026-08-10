<?php

$conn = mysqli_connect("localhost","root","","college");

if(isset($_POST['register']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];

    $sql = "INSERT INTO users(name,email,password)
            VALUES('$name','$email','$password')";

    if(mysqli_query($conn,$sql))
    {
        echo "Registration Successful";
    }
    else
    {
        echo "Error";
    }
}
?>

<form method="post">
    Name:
    <input type="text" name="name"><br><br>

    Email:
    <input type="email" name="email"><br><br>

    Password:
    <input type="password" name="password"><br><br>

    <input type="submit" name="register" value="Register">
</form>