<?php
// Q4: numbers divisible by 2 and 5 from 50 down to 2
echo "Divisible by 2 and 5 (50 to 2):<br>";
for ($i = 50; $i >= 2; $i--) {
    if ($i % 2 == 0 && $i % 5 == 0) echo "$i ";
}
