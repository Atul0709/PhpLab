<?php

$primes = [];
$candidate = 2;

// Loop until we have 20 prime numbers
while (count($primes) < 20) {
  // Check if the candidate is prime
  $isPrime = true;
  for ($i = 2; $i < $candidate; $i++) {
    if ($candidate % $i === 0) {
      $isPrime = false;
      break;
    }
  }

  // If prime, add it to the list and increment candidate
  if ($isPrime) {
    $primes[] = $candidate;
  }
  $candidate++;
}

// Print the list of prime numbers
echo "The first 20 prime numbers are: \n";
echo implode(", ", $primes);

?>
