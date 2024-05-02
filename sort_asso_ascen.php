<?php

function sortArrayByValue($array) {
  // Use asort() to sort the array by value in ascending order
  asort($array);

  // Maintain key-value association by returning the original array
  return $array;
}

// Sample associative array
$data = array(
  "name" => "Alice",
  "age" => 30,
  "score" => 95,
  "city" => "New York"
);

$sortedData = sortArrayByValue($data);

echo "Original array:\n";
print_r($data);

echo "\nSorted array by value (ascending):\n";
print_r($sortedData);

?>
