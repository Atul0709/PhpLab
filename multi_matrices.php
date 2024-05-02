<?php

function multiplyMatrices($matrix1, $matrix2) {
  // Check if matrix1's column count matches matrix2's row count for multiplication
  if (count($matrix1[0]) !== count($matrix2)) {
    return "Incompatible matrices for multiplication. Matrix 1's column count must equal Matrix 2's row count.";
  }

  $rows1 = count($matrix1);
  $cols1 = count($matrix1[0]);
  $rows2 = count($matrix2);
  $cols2 = count($matrix2[0]);

  // Initialize the result matrix with zeros
  $result = array_fill(0, $rows1, array_fill(0, $cols2, 0));

  // Perform matrix multiplication
  for ($i = 0; $i < $rows1; $i++) {
    for ($j = 0; $j < $cols2; $j++) {
      for ($k = 0; $k < $cols1; $k++) {
        $result[$i][$j] += $matrix1[$i][$k] * $matrix2[$k][$j];
      }
    }
  }

  return $result;
}

// Example matrices (replace with your actual data)
$matrix1 = array(
  array(1, 2, 3),
  array(4, 5, 6)
);

$matrix2 = array(
  array(10, 11),
  array(13, 14),
  array(16, 17)
);

$product = multiplyMatrices($matrix1, $matrix2);

// Check for errors
if (is_string($product)) {
  echo $product; // Display error message
} else {
  echo "Product of the matrices:\n";
  // Print the resulting matrix
  for ($i = 0; $i < count($product); $i++) {
    for ($j = 0; $j < count($product[$i]); $j++) {
      echo $product[$i][$j] . " ";
    }
    echo "\n";
  }
}

?>
