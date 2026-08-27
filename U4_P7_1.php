<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Document</title>
    </head>
    <body>
        <?php
            $conn = new mysqli("localhost", "root", "", "studentdb");

            if ($conn){
                echo "Database Connected Successfully. <br>";
            }
            else{
                die("Connection Failed" . $conn->connect_error());
            }
            $sql = "UPDATE students3
                    SET name='Suresh',
                        email='suresh@gmail.com',
                        city='Ahmedabad'
                    WHERE id=3";
            
            if($conn->query($sql)){
                echo "<br> Record Updated Successfully.";
            }
            else{
                echo "Error";
            }

            $conn->close();
            ?>
    </body>
</html>