?>
<html>
<head>
    <title>Cookies</title>
</head>
<body>
    <h2>Registration Form for Store Cookies</h2>

    <form method="POST">
        <label for="username">Username:</label>
        <input type="text" name="username"><br><br>

        <label for="password">Password:</label>
        <input type="password" name="password"><br><br>

        <input type="submit" value="Login">
        <input type="reset" value="Reset"><br>
    </form>

</body>
</html>

<?php

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name= $_POST["username"];
        $pass= $_POST["password"];

       setcookie('Username',$name,time()+86400*30,"/");
    }
?>