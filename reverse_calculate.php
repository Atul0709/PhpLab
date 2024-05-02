<?php

function reverseAndSum($number) {
  $reversed = 0;
  $sum = 0;

  // Iterate until the number becomes 0
  while ($number > 0) {
    // Extract the last digit
    $lastDigit = $number % 10;

    // Add the digit to the sum
    $sum += $lastDigit;

    // Build the reversed number by multiplying by 10 and adding the last digit
    $reversed = $reversed * 10 + $lastDigit;

    // Remove the last digit from the original number
    $number = (int)($number / 10);
  }

  return array("reversed" => $reversed, "sum" => $sum);
}

// Get input from the user (optional)
// $number = readline("Enter a number: ");

// Example usage (replace with your input if desired)
$number = 12345;

$result = reverseAndSum($number);

echo "Original number: $number\n";
echo "Reversed number: " . $result["reversed"] . "\n";
echo "Sum of digits: " . $result["sum"] . "\n";

?>
