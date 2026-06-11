<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
            error_reporting(0);
?>
<form method="get">
        <input type ="text1 name="uname ">
        <input type ="text2 name="uname ">
        <input type ="text3 name="uname ">
        <input type ="text4 name="uname "> 
        <input type ="text5 name="uname ">
        <input type ="submit" name ="submit" value="submit">
</form>

<?php   
            $nm=$_get['uname'];
            echo"hello,".$nm;
?>            
</body>
</html>

            