<?php
error_reporting(E_ALL);
ini_set('display_errors', 1);

if (isset($_POST['upload'])) {

    echo "<pre>";
    print_r($_FILES);
    echo "</pre>";

    $folder = "uploads/";

    if (!is_dir($folder)) {
        mkdir($folder, 0777, true);
    }

    $filename = basename($_FILES["image"]["name"]);
    $temp = $_FILES["image"]["tmp_name"];

    if (move_uploaded_file($temp, $folder . $filename)) {
        echo "<h2 style='color:green;'>Upload Successful</h2>";
        echo "<img src='uploads/$filename' width='300'>";
    } else {
        echo "<h2 style='color:red;'>Upload Failed</h2>";
    }
}
?>

<!DOCTYPE html>
<html>
<body>

<form method="POST" enctype="multipart/form-data">
    <input type="file" name="image" required><br><br>
    <input type="submit" name="upload" value="Upload">
</form>

</body>
</html>
