<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
      $conn = new mysqli("localhost", "root", "", "studentdb",3307);
      if($conn->connect_error)
      {
        die("Connection failed");
      }
      $stmt = $conn->prepare("INSERT INTO students1(name,email,city) VALUES (?,?,?)");

       $name = "Raj";
       $email = "raj@gmail.com";
       $city = "rajkot";

       $stmt->bind_param("sss",$name,$email,$city);

       if($stmt->execute())
       {
        echo "Record Inserted successfully.";
       }

       $stmt->close();
       $conn->close();
    ?>
</body>
</html>