<?php
include ' db.php';
$sel = "select*from 'user' ";
$result = mysqli_query ($conn,$sel);
if ($row = $result -> num_rows > 0){
    while ($row = $result -> fetch_assoc())
    echo $row ['id']."".$row ['name']. 
    "<br>";
}
?>
