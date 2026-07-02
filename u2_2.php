<!DOCTYPE html>
<html?>
<head>
    <title>Sort array</title>
</head>
<body>

<form action="" method="post">
Enter 5 numbers:<br><br>

<input type="text" name="a[]"><br><br>
<input type="text" name="a[]"><br><br>
<input type="text" name="a[]"><br><br>
<input type="text" name="a[]"><br><br>
<input type="text" name="a[]"><br><br>

<input type="submit" value="Sort">
</form>

<?php
$a = $_POST['a'];

sort($a);

echo "Sorted Array:<br>";

for($i=0; $i<5; $i++)
{
    echo $a[$i]." ";
}
?>

</body>
</html>