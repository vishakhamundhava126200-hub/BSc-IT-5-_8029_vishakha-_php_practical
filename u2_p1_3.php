<!DOCTYPE html>
<html>
<head>
    <title>Laptop Information</title>
</head>
<body>

<h2>Enter Laptop Information</h2>

<form method="post">
    Company Name:
    <input type="text" name="company" required><br><br>

    Model Name:
    <input type="text" name="model" required><br><br>

    Price:
    <input type="number" name="price" required><br><br>

    <input type="submit" name="submit" value="Add Laptop">
</form>

<?php
session_start();

if (!isset($_SESSION['laptops'])) {
    $_SESSION['laptops'] = array();
}

if (isset($_POST['submit'])) {

    $laptop = array(
        "Company" => $_POST['company'],
        "Model" => $_POST['model'],
        "Price" => $_POST['price']
    );

    $_SESSION['laptops'][] = $laptop;
}

if (!empty($_SESSION['laptops'])) {
    echo "<h2>Laptop Details</h2>";
    echo "<table border='1' cellpadding='10'>";
    echo "<tr>
            <th>Company Name</th>
            <th>Model Name</th>
            <th>Price</th>
          </tr>";

    foreach ($_SESSION['laptops'] as $lap) {
        echo "<tr>";
        echo "<td>".$lap['Company']."</td>";
        echo "<td>".$lap['Model']."</td>";
        echo "<td>".$lap['Price']."</td>";
        echo "</tr>";
    }

    echo "</table>";
}
?>

</body>
</html>