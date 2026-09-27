<?php
// Q2: divisible by 3, 5, both, or none
$n = 30;

if ($n % 3 == 0 && $n % 5 == 0) echo "$n is divisible by both 3 and 5";
elseif ($n % 3 == 0) echo "$n is divisible by 3";
elseif ($n % 5 == 0) echo "$n is divisible by 5";
else echo "$n is divisible by neither 3 nor 5";
