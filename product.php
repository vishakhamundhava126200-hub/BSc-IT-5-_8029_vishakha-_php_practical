<?php
$conn = mysqli_connect("localhost", "root", "", "product");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}

$sql = "SELECT * FROM product";
$result = mysqli_query($conn, $sql);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Product List</title>
    <style>
        table{
            border-collapse:collapse;
            width:80%;
            margin:auto;
        }
        th,td{
            border:1px solid black;
            padding:10px;
            text-align:center;
        }
        th{
            background:#4CAF50;
            color:white;
        }
    </style>
</head>
<body>

<h2 align="center">Product Table</h2>

<table>
<tr>
    <th>Product Name</th>
    <th>Price</th>
    <th>Type</th>
    <th>Image</th>
    <th>Quantity</th>
</tr>

<?php
while($row = mysqli_fetch_assoc($result))
{
?>
<tr>
    <td><?php echo $row['product name']; ?></td>
    <td><?php echo $row['product price']; ?></td>
    <td><?php echo $row['product type']; ?></td>
    <td><img src="images/<?php echo $row['product image']; ?>" width="80"></td>
    <td><?php echo $row['product qty']; ?></td>
</tr>
<?php
}
?>

</table>

</body>
</html>

<?php
mysqli_close($conn);
?>