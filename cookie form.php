<!DOCTYPE html>
<html>
<head>
    <title>Create Cookie</title>
</head>
<body>

<h2>Create a Cookie</h2>

<form method="post" action="">
    Enter Your Name:
    <input type="text" name="username" required>
    <input type="submit" name="submit" value="Save">
</form>


<?php

if (isset($_COOKIE['username'])) {
    echo "<h3>Cookie Created Successfully!</h3>";
    echo "Welcome, " . htmlspecialchars($_COOKIE['username']);
}
?>

</body>
</html>

<?php

    if($_SERVER['REQUEST_METHOD']=="POST"){

        $username = $_POST['username'];
        $password = $_POST['password'] ?? '';


        setcookie('username', $username,time()+86400,"/");
    }

?>