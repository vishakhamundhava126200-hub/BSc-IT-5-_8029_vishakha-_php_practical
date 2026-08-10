<?php
echo "<h3>1. array_change_key_case()</h3>";

$arr = array(
    "Name" => "Krisha",
    "AGE" => 20,
    "City" => "Rajkot"
);

echo "Original Array:<br>";
print_r($arr);

echo "<br>Keys in Lowercase:<br>";
print_r(array_change_key_case($arr, CASE_LOWER));

echo "<br>Keys in Uppercase:<br>";
print_r(array_change_key_case($arr, CASE_UPPER));


echo "<hr><h3>2. array_count_values()</h3>";

$colors = array("Red", "Blue", "Red", "Green", "Blue", "Red");

echo "Original Array:<br>";
print_r($colors);

echo "<br>Count of Values:<br>";
print_r(array_count_values($colors));


echo "<hr><h3>3. array_pop()</h3>";

$fruits = array("Apple", "Banana", "Mango", "Orange");

echo "Original Array:<br>";
print_r($fruits);

$removed = array_pop($fruits);

echo "<br>Removed Element: " . $removed . "<br>";

echo "Array After Pop:<br>";
print_r($fruits);



echo "<hr><h3>4. array_push()</h3>";

$numbers = array(10, 20, 30);

echo "Original Array:<br>";
print_r($numbers);

array_push($numbers, 40, 50);

echo "<br>Array After Push:<br>";
print_r($numbers);


echo "<hr><h3>5. sort()</h3>";

$marks = array(85, 40, 95, 60, 75);

echo "Original Array:<br>";
print_r($marks);

sort($marks);

echo "<br>Sorted Array (Ascending Order):<br>";
print_r($marks);

?>
