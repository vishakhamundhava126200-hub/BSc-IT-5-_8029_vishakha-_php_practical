<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cookies</title>
</head>
<body>
    <?php
        if(isset($_POST['create']))
        {
            $username=$_POST['username'];
            setcookie("username",$username,time()+(24*60*60),"/");
            echo "<h3>Cookie Created Successfully.</h3>";
        }

        if(isset($_POST['read']))
        {
            if(isset($_COOKIE['username']))
            {
                echo "<h3>Cookie value: ".$_COOKIE['username']."</h3>";
            }
            else
            {
                echo "<h3>Cookie Not found.</h3>";
            }
        }
        
        if(isset($_POST['delete']))
        {
            setcookie("username","",time()-3600,"/");
            echo "<h3>Cookie Deleted successfully.</h3>";
        }

        if(isset($_POST['header']))
        {
            $username = $_POST['username'];
            setcookie("username",$username,time()+(24*60*60),"/");
            header("Location:Home.php");
            exit();
        }

        echo "<br><a href='U3_1-4.html'> Go to back </a>";
    ?>
</body>
</html>