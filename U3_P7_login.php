<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
    session_start();
    $conn = new mysqli("localhost","root","","logindb",3307);
    $username = $_POST['username'];
    $password = $_POST['password'];
    $sql = "SELECT * FROM users WHERE username='$username' AND password='$password'";
    $result  = mysqli_query($conn,$sql);
    if(mysqli_num_rows($result) > 0)
    {
        $_SESSION["username"] = $username;
        header("Location: ");
        exit();
    }
    else
    {
        echo "username or password wrong <br></br>";
        
    }

    ?>
</body>
</html>