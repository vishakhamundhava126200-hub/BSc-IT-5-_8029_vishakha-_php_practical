
<!DOCTYPE html>
<html>
<head>
    <title>Delete Cookie</title>
</head>
<body>

    <h2>Registration Form for Delete Cookies</h2>

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

    setcookie("Username", $name, time()+86400*30, "/");
}

if(isset($_COOKIE["Username"]))
{
    setcookie("Username","", time()-86400*30, "/");
}
?>