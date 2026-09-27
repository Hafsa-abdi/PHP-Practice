<?php
// Q3: odd numbers from 2 to 20
echo "Odd numbers from 2 to 20:<br>";
for ($i = 2; $i <= 20; $i++) {
    if ($i % 2 != 0) echo "$i ";
}

// even numbers from 35 down to 7
echo "<br><br>Even numbers from 35 to 7:<br>";
for ($i = 35; $i >= 7; $i--) {
    if ($i % 2 == 0) echo "$i ";
}
