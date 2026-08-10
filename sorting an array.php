<?php
$arr = explode(" ", readline("Enter numbers separated by space: "));

sort($arr);

echo "Sorted Array: ";
print_r($arr);
?>