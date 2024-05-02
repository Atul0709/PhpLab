<?php

class InvalidAgeException extends Exception {
  public function __construct($age) {
    $this->message = "Invalid age: $age. Age must be a positive integer.";
  }
}

function getAge() {
  $age = readline("Enter your age: ");

  // Validate user input (positive integer)
  if (!is_numeric($age) || (int)$age <= 0) {
    throw new InvalidAgeException($age);
  }

  return (int)$age;
}

try {
  $age = getAge();
  echo "Your age is: $age\n";
} catch (InvalidAgeException $e) {
  echo "Error: " . $e->getMessage() . "\n";
}

?>
