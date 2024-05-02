<?php

function sortArrayByKeyDesc($array) {
  // Use krsort() to sort the array by key in descending order
  krsort($array);

  // Return the sorted array
  return $array;
}

// Sample associative array
$data = array(
  "name" => "Alice",
  "age" => 30,
  "score" => 95,
  "city" => "New York"
);

$sortedData = sortArrayByKeyDesc($data);

echo "Original array:\n";
print_r($data);

echo "\nSorted array by key (descending):\n";
print_r($sortedData);

?>
