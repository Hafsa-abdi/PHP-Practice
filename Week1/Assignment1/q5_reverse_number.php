<?php
// Q5: reverse a number (no strrev)
$num = 12345;
$original = $num;
$reverse = 0;

while ($num > 0) {
    $reverse = $reverse * 10 + $num % 10;
    $num = (int)($num / 10);
}

echo "Reverse of $original = $reverse";
