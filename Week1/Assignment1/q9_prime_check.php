<?php
// Q9: check if a number is prime
$n = 29;
$isPrime = $n > 1;

for ($i = 2; $i * $i <= $n; $i++) {
    if ($n % $i == 0) { $isPrime = false; break; }
}

echo $isPrime ? "$n is a prime number" : "$n is not a prime number";
