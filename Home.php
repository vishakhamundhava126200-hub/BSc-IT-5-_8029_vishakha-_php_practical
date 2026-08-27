<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "<h2> Home page </h2>";
        if(isset($_COOKIE['username']))
        {
            echo "Welcome: ".$_COOKIE['username'];
        }
        else{
            echo "Cookie not found";
        }
        echo "<br><br>";
        echo "<a href='U3_1-4.html'> Go to back </a>";
    ?>
</body>
</html>