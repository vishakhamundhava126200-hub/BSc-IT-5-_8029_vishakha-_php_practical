<?php

$username = "";
$password = "";

if(isset($_COOKIE['username']))
{
    $username = $_COOKIE['username'];
}

if(isset($_COOKIE['password']))
{
    $password = $_COOKIE['password'];
}

if(isset($_POST['login']))
{
    setcookie("username",$_POST['username'],time()+86400*30);
    setcookie("password",$_POST['password'],time()+86400*30);

    echo "Login Successful";
}
?>

<form method="post">
    Username:
    <input type="text" name="username" value="<?php echo $username; ?>"><br><br>

    Password:
    <input type="password" name="password" value="<?php echo $password; ?>"><br><br>

    <input type="submit" name="login" value="Login">
</form>

