<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        echo "using index array to create week <br>";
        $days=array("monday","tuesday","wednesday","thursday","friday","saturday");
        foreach($days as $d)
        {
            echo $d."<br>";
        }
    ?>
</body>
</html>