<?php

function addMatrices($matrix1, $matrix2) {
  // Check if matrices have the same dimensions
  if (count($matrix1) !== count($matrix2) || count($matrix1[0]) !== count($matrix2[0])) {
    return "Matrices must have the same dimensions for addition.";
  }

  $rows = count($matrix1);
  $cols = count($matrix1[0]);

  // Initialize the result matrix with zeros
  $result = array_fill(0, $rows, array_fill(0, $cols, 0));

  // Add corresponding elements of both matrices
  for ($i = 0; $i < $rows; $i++) {
    for ($j = 0; $j < $cols; $j++) {
      $result[$i][$j] = $matrix1[$i][$j] + $matrix2[$i][$j];
    }
  }

  return $result;
}

// Example matrices (replace with your actual data)
$matrix1 = array(
  array(1, 2, 3),
  array(4, 5, 6),
  array(7, 8, 9)
);

$matrix2 = array(
  array(10, 11, 12),
  array(13, 14, 15),
  array(16, 17, 18)
);

$sum = addMatrices($matrix1, $matrix2);

// Check for errors
if (is_string($sum)) {
  echo $sum; // Display error message
} else {
  echo "Sum of the matrices:\n";
  // Print the resulting matrix
  for ($i = 0; $i < count($sum); $i++) {
    for ($j = 0; $j < count($sum[$i]); $j++) {
      echo $sum[$i][$j] . " ";
    }
    echo "\n";
  }
}

?>
