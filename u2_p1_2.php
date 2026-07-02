<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "using associative array to create week <br>";
        $month=array("jan"=>"31","feb"=>"28","march"=>"31","april"=>"30","may"=>"31","june"=>"30","july"=>"31","aug"=>"31","sep"=>"30","oct"=>"31","nov"=>"30","dec"=>"31");
        foreach($month as $m)
        {
            echo $m."<br>";
        }
    ?>
</body>
</html>