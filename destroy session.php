<html>
<head>
    <title>Session</title>
</head>
<body>
    <h2>Registration Form for Destroy session</h2>

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
    
    session_start();

    if($_SERVER["REQUEST_METHOD"]=="POST"){
        $name= $_POST["username"];
        $pass= $_POST["password"];

        $_SESSION["Username"]=$name;
        header('location: home.php');  
    }
?>
<?php

    echo"welcome to home page of BCA 5 C";

?>
