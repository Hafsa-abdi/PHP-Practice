<?php
// Week 1: output, variables & constants, control structures
// Use ?topic=output|variables|control to show one topic only
$topic = $_GET['topic'] ?? 'all';
?>
<!DOCTYPE html>
<html>
<head>
    <title>Week 1 - PHP Basics</title>
    <style>
        body { font-family: Arial, sans-serif; max-width: 900px; margin: 20px auto; padding: 0 16px; }
        h2 { border-bottom: 1px solid #ccc; padding-bottom: 4px; }
        pre { background: #f4f4f4; padding: 10px; overflow-x: auto; font-size: 15px; }
        nav a { margin-right: 12px; }
    </style>
</head>
<body>
<h1>Week 1 - PHP Basics</h1>
<nav>
    <a href="?topic=all">All</a>
    <a href="?topic=output">Output</a>
    <a href="?topic=variables">Variables &amp; Constants</a>
    <a href="?topic=control">Control Structures</a>
</nav>

<?php if ($topic == 'all' || $topic == 'output'): ?>
<h2>1. PHP Output: echo and print</h2>
<pre>
<?php
// echo can take several values, print takes one and returns 1
echo "Hello, World! This is my first PHP program.\n";
echo "Multiple", " ", "values", " ", "with", " ", "echo", "\n";
print "Using print to display text.\n";

$result = print "Print returns 1 after output.\n";
echo "The return value of print was: $result\n";

// joining text with the dot operator
$user = "Hafsa";
echo "Hello " . $user . ", welcome to PHP!\n";

// formatted output
printf("Formatted output: %s is %d years old.\n", "Hafsa", 24);
?>
</pre>
<?php endif; ?>

<?php if ($topic == 'all' || $topic == 'variables'): ?>
<h2>2. Variables and Constants</h2>
<pre>
<?php
// variables start with $ and don't need a type
$name = "Hafsa";
$age = 24;
$price = 19.99;
$isActive = true;
$skills = ["PHP", "HTML", "CSS"];

echo "Name: $name (" . gettype($name) . ")\n";
echo "Age: $age (" . gettype($age) . ")\n";
echo "Price: $price (" . gettype($price) . ")\n";
echo "Active: " . ($isActive ? "yes" : "no") . " (" . gettype($isActive) . ")\n";
echo "Skills: " . implode(", ", $skills) . " (" . gettype($skills) . ")\n";

// names are case-sensitive
$Name = "Different Variable";
echo "\$name is '$name' while \$Name is '$Name'\n\n";

// constants can't change once defined
define("SITE_NAME", "My PHP Learning Site");
define("PI", 3.14159);

echo "Site name: " . SITE_NAME . "\n";
echo "Value of PI: " . PI . "\n";
if (defined("SITE_NAME")) {
    echo "SITE_NAME constant is defined.\n";
}
?>
</pre>
<?php endif; ?>

<?php if ($topic == 'all' || $topic == 'control'): ?>
<h2>3. Control Structures</h2>
<pre>
<?php
// if / elseif / else
$score = 85;
if ($score >= 90) {
    echo "Grade: A\n";
} elseif ($score >= 80) {
    echo "Grade: B\n";
} else {
    echo "Grade: C\n";
}

// switch
$day = "Monday";
switch ($day) {
    case "Saturday":
    case "Sunday":
        echo "It's the weekend!\n";
        break;
    case "Monday":
        echo "Back to work/study.\n";
        break;
    default:
        echo "It's a regular weekday.\n";
}

// ternary and null coalescing
$isLoggedIn = true;
echo ($isLoggedIn ? "Welcome back!" : "Please log in.") . "\n";
$username = null;
echo "Display name: " . ($username ?? "Guest") . "\n";

// for loop
echo "For loop: ";
for ($i = 1; $i <= 5; $i++) {
    echo "$i ";
}

// while loop
echo "\nWhile loop: ";
$n = 5;
while ($n > 0) {
    echo "$n ";
    $n--;
}

// foreach loop
echo "\nForeach loop: ";
foreach (["PHP", "HTML", "CSS"] as $lang) {
    echo "$lang ";
}
echo "\n";
?>
</pre>
<?php endif; ?>

</body>
</html>
