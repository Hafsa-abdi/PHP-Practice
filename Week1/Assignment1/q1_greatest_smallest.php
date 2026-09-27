<?php
// Q1: greatest and smallest of three numbers (no min/max)
$a = 15; $b = 42; $c = 7;

$greatest = $a;
if ($b > $greatest) $greatest = $b;
if ($c > $greatest) $greatest = $c;

$smallest = $a;
if ($b < $smallest) $smallest = $b;
if ($c < $smallest) $smallest = $c;

echo "Numbers: $a, $b, $c<br>";
echo "Greatest: $greatest<br>";
echo "Smallest: $smallest";
