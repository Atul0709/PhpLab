<?php

function factorial($number) {
  if ($number < 0) {
    return "Factorial is not defined for negative numbers";
  } else if ($number == 0) {
    return 1;
  } else {
    $factorial = 1;
    for ($i = 1; $i <= $number; $i++) {
      $factorial *= $i;
    }
    return $factorial;
  }
}

$number = 5;
$result = factorial($number);

echo "Factorial of $number is $result";

?>
