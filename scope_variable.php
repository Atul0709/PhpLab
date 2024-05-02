<?php

// Global variable
$global_var = "This is a global variable";

function test_scopes() {

  // Local variable
  $local_var = "This is a local variable";

  // Static variable (initialized on first call)
  static $static_var = 0;

  echo "Inside function: <br>";
  echo "  - Local: $local_var <br>";

  // Accessing global variable within function (requires `global` keyword)
  global $global_var;
  echo "  - Global (using global keyword): $global_var <br>";

  // Incrementing static variable
  $static_var++;
  echo "  - Static (value persists across calls): $static_var <br>";
}

// Call the function
test_scopes();

echo "<br>Outside function: <br>";
echo "  - Global: $global_var <br>";  // Global variable accessible

// Local variable cannot be accessed here (out of scope)
// echo "  - Local: $local_var <br>";  // This would cause an error

?>
