
<?php
$conn = mysqli_connect("localhost", "root", "", "test");

if (!$conn) {
    die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT 
        NOW() AS Current_Time,
        HOUR(NOW()) AS Hour_Value,
        MINUTE(NOW()) AS Minute_Value,
        SECOND(NOW()) AS Second_Value,
        DATE_FORMAT(NOW(), '%d-%m-%Y %h:%i:%s') AS Formatted_Date";

$result = mysqli_query($conn, $sql);

if ($result) {
    $row = mysqli_fetch_assoc($result);

    echo "Current Date and Time: " . $row['Current_Time'] . "<br>";
    echo "HOUR(): " . $row['Hour_Value'] . "<br>";
    echo "MINUTE(): " . $row['Minute_Value'] . "<br>";
    echo "SECOND(): " . $row['Second_Value'] . "<br>";
    echo "DATE_FORMAT(): " . $row['Formatted_Date'] . "<br>";
} else {
    echo "Error: " . mysqli_error($conn);
}


mysqli_close($conn);
?>