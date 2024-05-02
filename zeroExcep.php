<?php

function divideNumbers($numerator, $denominator) {
  try {
    if ($denominator === 0) {
      throw new Exception("Division by zero is not allowed.");
    }
    return $numerator / $denominator;
  } catch (Exception $e) {
    echo "An error occurred: " . $e->getMessage() . "\n";
    return null; // Or handle the error differently (e.g., log the error)
  }
}

$result = divideNumbers(200, 0);

if ($result !== null) {
  echo "Result: $result";
}

?>
