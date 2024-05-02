<?php

$text = "This is a string for demonstration purposes.";

// 1. strlen (length) - Get string length
$string_length = strlen($text);
echo "String length: $string_length \n";

// 2. strtoupper (upper) - Convert to uppercase
$uppercase_text = strtoupper($text);
echo "Uppercase: $uppercase_text \n";

// 3. strtolower (lower) - Convert to lowercase
$lowercase_text = strtolower($text);
echo "Lowercase: $lowercase_text \n";

// 4. strpos (find) - Find the position of a substring (case-sensitive)
$substring_position = strpos($text, "string");
echo "Position of 'string': ";

if ($substring_position !== false) {
  echo $substring_position . "\n";
} else {
  echo "Not found\n";
}

// 5. substr (substring) - Extract a substring
$extracted_substring = substr($text, 10, 12);  // Extract 12 characters from index 10
echo "Extracted substring: $extracted_substring \n";

// 6. trim (trim) - Remove leading and trailing whitespace
$trimmed_text = trim($text);
echo "Trimmed text: $trimmed_text \n";

// 7. str_replace (replace) - Replace occurrences of a substring
$replaced_text = str_replace("string", "replacement", $text);
echo "Replaced text: $replaced_text \n";

?>
