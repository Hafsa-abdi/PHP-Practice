<!DOCTYPE html>
<html>
<head>
    <title>Week 1 - Assignment 1 (Q1 - Q10)</title>
    <style>
        body { font-family: Arial, sans-serif; margin: 20px; }
        h2 { background: #eee; padding: 6px 10px; border-left: 4px solid #666; }
        section { margin-bottom: 30px; }
        table { border-collapse: collapse; }
        td { border: 1px solid #999; padding: 2px 4px; text-align: center; }
        caption { font-size: 18px; }
    </style>
</head>
<body>

<h1>Week 1 - Assignment 1</h1>

<section>
    <h2>Q1: Greatest and smallest of three numbers</h2>
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
    ?>
</section>

<section>
    <h2>Q2: Divisible by 3, 5, both, or none</h2>
    <?php
    // Q2: divisible by 3, 5, both, or none
    $n = 30;

    if ($n % 3 == 0 && $n % 5 == 0) echo "$n is divisible by both 3 and 5";
    elseif ($n % 3 == 0) echo "$n is divisible by 3";
    elseif ($n % 5 == 0) echo "$n is divisible by 5";
    else echo "$n is divisible by neither 3 nor 5";
    ?>
</section>

<section>
    <h2>Q3: Odd and even number ranges</h2>
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
    ?>
</section>

<section>
    <h2>Q4: Divisible by 2 and 5 (50 down to 2)</h2>
    <?php
    // Q4: numbers divisible by 2 and 5 from 50 down to 2
    echo "Divisible by 2 and 5 (50 to 2):<br>";
    for ($i = 50; $i >= 2; $i--) {
        if ($i % 2 == 0 && $i % 5 == 0) echo "$i ";
    }
    ?>
</section>

<section>
    <h2>Q5: Reverse a number</h2>
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
    ?>
</section>

<section>
    <h2>Q6: LCM of two numbers</h2>
    <?php
    // Q6: LCM of two positive integers
    $a = 8; $b = 12;

    $lcm = ($a > $b) ? $a : $b;
    while ($lcm % $a != 0 || $lcm % $b != 0) {
        $lcm++;
    }

    echo "LCM of $a and $b = $lcm";
    ?>
</section>

<section>
    <h2>Q7: HCF of two numbers</h2>
    <?php
    // Q7: HCF of two integers
    $a = 18; $b = 24;

    $hcf = 1;
    $limit = ($a < $b) ? $a : $b;
    for ($i = 1; $i <= $limit; $i++) {
        if ($a % $i == 0 && $b % $i == 0) $hcf = $i;
    }

    echo "HCF of $a and $b = $hcf";
    ?>
</section>

<section>
    <h2>Q8: Multiplication table (12x12)</h2>
    <table>
        <caption>Multiplication Table</caption>
        <?php
        // Q8: 12x12 table using nested loops
        for ($i = 1; $i <= 12; $i++) {
            echo "<tr>";
            for ($j = 1; $j <= 12; $j++) {
                echo "<td>" . ($i * $j) . "</td>";
            }
            echo "</tr>";
        }
        ?>
    </table>
</section>

<section>
    <h2>Q9: Prime number check</h2>
    <?php
    // Q9: check if a number is prime
    $n = 29;
    $isPrime = $n > 1;

    for ($i = 2; $i * $i <= $n; $i++) {
        if ($n % $i == 0) { $isPrime = false; break; }
    }

    echo $isPrime ? "$n is a prime number" : "$n is not a prime number";
    ?>
</section>

<section>
    <h2>Q10: Prime numbers from 10 to 50</h2>
    <?php
    // Q10: prime numbers from 10 to 50
    echo "Prime numbers from 10 to 50:<br>";
    for ($n = 10; $n <= 50; $n++) {
        $isPrime = true;
        for ($i = 2; $i * $i <= $n; $i++) {
            if ($n % $i == 0) { $isPrime = false; break; }
        }
        if ($isPrime) echo "$n ";
    }
    ?>
</section>

</body>
</html>
