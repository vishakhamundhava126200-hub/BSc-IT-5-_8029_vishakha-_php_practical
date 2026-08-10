<?php


$str = "Learning PHP is Easy";

echo "Original String: " . $str . "<br><br>";


echo "1. String Length: " . strlen($str) . "<br><br>";


echo "2. Position of 'PHP': " . strpos($str, "PHP") . "<br><br>";


echo "3. Total Words: " . str_word_count($str) . "<br><br>";

echo "4. Reversed String: " . strrev($str) . "<br><br>";


echo "5. Lowercase: " . strtolower($str) . "<br><br>";

echo "6. Uppercase: " . strtoupper($str);

?>