<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $sl = array('jim','max','roy','joy');
        
        $reverse = array_reverse($sl);

        foreach($reverse as $M18){
            echo $M18."<br>";
        }
    ?>
</body>
</html>