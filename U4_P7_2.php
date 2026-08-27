<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $conn = new PDO("mysql:host=localhost;dbname=studentdb", "root", "");

            $sql = "UPDATE students4
                    SET name='Amit',
                        email='amit@gmail.com',
                        city='Ahmedabad'
                    WHERE id=3";

            if($conn->query($sql)){
                echo "<br> Record Updated Successfully.";
            }
            else{
                echo "Error";
            }
        ?>
    </body>
</html>