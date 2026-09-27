<?php
// Q7: HCF of two integers
$a = 18; $b = 24;

$hcf = 1;
$limit = ($a < $b) ? $a : $b;
for ($i = 1; $i <= $limit; $i++) {
    if ($a % $i == 0 && $b % $i == 0) $hcf = $i;
}

echo "HCF of $a and $b = $hcf";
