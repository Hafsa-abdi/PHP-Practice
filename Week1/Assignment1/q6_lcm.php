<?php
// Q6: LCM of two positive integers
$a = 8; $b = 12;

$lcm = ($a > $b) ? $a : $b;
while ($lcm % $a != 0 || $lcm % $b != 0) {
    $lcm++;
}

echo "LCM of $a and $b = $lcm";
