
<?php
session_start();

if(isset($_POST['login']))
{
    $username = $_POST['username'];
    $password = $_POST['password'];

    if($username == "admin" && $password == "123")
    {
        $_SESSION['user'] = $username;
        header("Location: home.php");
    }
    else
    {
        echo "Invalid Username or Password";
    }
}
?>

<form method="post">
    Username: <input type="text" name="username"><br><br>
    Password: <input type="password" name="password"><br><br>
    <input type="submit" name="login" value="Login">
</form>
home.php
<?php
session_start();

if(!isset($_SESSION['user']))
{
    header("Location: login.php");
    exit();
}
?>

<h2>Welcome <?php echo $_SESSION['user']; ?></h2>
<a href="logout.php">Logout</a>
logout.php
<?php
session_start();
session_destroy();

header("Location: login.php");
exit();
?>

