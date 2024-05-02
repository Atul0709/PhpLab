<?php

$servername = "localhost";
$username = "root";
$password = "1234";
$dbname = "advancejavadb";

// Create connection
$conn = mysqli_connect($servername, $username, $password, $dbname);

// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

// Create table (if it doesn't exist)
$sql = "CREATE TABLE IF NOT EXISTS Employee (
  id INT AUTO_INCREMENT PRIMARY KEY,
  first_name VARCHAR(50) NOT NULL,
  last_name VARCHAR(50) NOT NULL,
  email VARCHAR(100) UNIQUE NOT NULL
)";

if (mysqli_query($conn, $sql)) {
  echo "Employee table created successfully (if it didn't exist already).<br>";
} else {
  echo "Error creating table: " . mysqli_error($conn) . "<br>";
}

// Prepare data for insertion
$employees = array(
  array("John", "Doe", "john.doe@example.com"),
  array("Jane", "Smith", "jane.smith@example.com"),
  array("Mike", "Jones", "mike.jones@example.com"),
);

// Insert records
foreach ($employees as $employee) {
  $firstName = $employee[0];
  $lastName = $employee[1];
  $email = $employee[2];

  $sql = "INSERT INTO Employee (first_name, last_name, email)
          VALUES ('$firstName', '$lastName', '$email')";

  if (mysqli_query($conn, $sql)) {
    echo "New record inserted successfully for $firstName $lastName<br>";
  } else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn) . "<br>";
  }
}

mysqli_close($conn);
?>
