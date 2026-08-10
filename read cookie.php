<!DOCTYPE html>
<html>
<head>
    <title>Read Cookie</title>
</head>
<body>

    <h2>Registration Form for Read Cookies</h2>

    <form method="POST">
        <label>Username:</label>
        <input type="text" name="username"><br><br>

        <label>Password:</label>
        <input type="password" name="password"><br><br>

        <input type="submit" value="Login">
        <input type="reset" value="Reset"><br><br>
    </form>

</body>
</html>

<?php

if($_SERVER["REQUEST_METHOD"]=="POST")
{
    $name = $_POST["username"];
    $pass = $_POST["password"];

    // Create Cookie
    setcookie("Username", $name, time()+86400*30, "/");

   
}

// Read Cookie
if(isset($_COOKIE["Username"]))
{
    echo "<br>Username from Cookie: " . $_COOKIE["Username"];
}
?>
