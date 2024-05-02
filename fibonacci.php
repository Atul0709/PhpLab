<?php

function fibonacci($n) {
  // Base cases for the first two numbers
  if ($n == 0) {
    return 0;
  } else if ($n == 1) {
    return 1;
  }

  // Recursive call to calculate the nth Fibonacci number
  return fibonacci($n - 1) + fibonacci($n - 2);
}

// Generate and print the first 20 Fibonacci numbers
for ($i = 0; $i < 20; $i++) {
  echo fibonacci($i) . " ";
}

?>
