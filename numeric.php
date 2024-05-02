<?php

// 1. Rounding (round, floor, ceil)
$number = 3.14159;
echo "Original number:              " . number_format($number, 5) . "\n";

echo "Rounded to nearest integer:   " . round($number) . "\n";
echo "Rounded down to nearest int:   " . floor($number) . "\n";
echo "Rounded up to nearest int:    " . ceil($number) . "\n";

// 2. Absolute value (abs)
$negative_number = -5;
echo "Absolute value of " . $negative_number . ":  " . abs($negative_number) . "\n";

// 3. Checking if numeric (is_numeric)
$valid_number = 123;
$invalid_number = "hello";
echo "is_numeric($valid_number):     " . (is_numeric($valid_number) ? 'true' : 'false') . "\n";
echo "is_numeric($invalid_number):   " . (is_numeric($invalid_number) ? 'true' : 'false') . "\n";

// 4. Power (pow)
$base = 2;
$exponent = 3;
echo "$base raised to the power of $exponent: " . pow($base, $exponent) . "\n";

// 5. Random number generation (rand)
$min = 1;
$max = 10;
echo "Random number between $min and $max: " . rand($min, $max) . "\n";

// 6. Maximum and Minimum (max, min)
$numbers = array(5, 2, 8, 1, 9);
echo "Maximum value in the array:    " . max($numbers) . "\n";
echo "Minimum value in the array:    " . min($numbers) . "\n";

// 7. Number formatting (number_format)
$money_value = 123456.789;
echo "Formatted currency:           $" . number_format($money_value, 2) . "\n";

?>
