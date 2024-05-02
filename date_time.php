<?php

// Get the current date and time
$currentTime = date('Y-m-d H:i:s');
echo "Current date and time (YYYY-MM-DD HH:MM:SS): $currentTime\n";

// Get the timestamp (seconds since Unix epoch)
$timestamp = time();
echo "Current timestamp (seconds since 1970-01-01 UTC): $timestamp\n";

// Format the timestamp into a different format
$formattedTime = date('l, F jS, Y g:i:s A', $timestamp);
echo "Formatted timestamp (e.g., Wednesday, April 3rd, 2024 11:23:45 PM): $formattedTime\n";

// Calculate the date and time a week from now
$weekFromNow = strtotime('+1 week');
$formattedWeekFromNow = date('Y-m-d H:i:s', $weekFromNow);
echo "Date and time a week from now: $formattedWeekFromNow\n";

// Check if today is a weekend (Saturday or Sunday)
$isWeekend = (date('w') == 0 || date('w') == 6);
if ($isWeekend) {
  echo "Today is a weekend!\n";
} else {
  echo "Today is a weekday.\n";
}

// Calculate the difference between two dates (example: birthday)
$birthday = strtotime('2003-09-07'); // Replace with your actual birthday
$age = (int) floor(($timestamp - $birthday) / (365 * 24 * 60 * 60));
echo "Your approximate age based on birthday: $age years old\n";

?>
