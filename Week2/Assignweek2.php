<?php
// PHP & MySQL assignment - all tasks in one file
// output is written as HTML tables so it is easy to read in the browser

echo '<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<title>Week 2 Assignment</title>
<style>
body { font-family: Arial, sans-serif; margin: 20px; }
table { border-collapse: collapse; margin-bottom: 20px; }
th, td { border: 1px solid #888; padding: 6px 12px; text-align: center; }
th { background: #e8eef7; }
h2 { margin-top: 30px; }
.pass { color: green; font-weight: bold; }
.fail { color: red; font-weight: bold; }
td.diag { background: #999; color: #fff; font-weight: bold; }
</style>
</head>
<body>
';


// ========================= TASK 1 =========================
// one dimensional array
echo "<h2>TASK 1 - One dimensional array</h2>";

$arr = array(5, -7, 12, 10, -7, 11, -6, 12, 1, -7, 2, 9);

// print all elements
echo "<p>Array elements:</p>";
foreach ($arr as $i => $val) {
    echo "<p>arr[$i] = $val</p>";
}

// even and odd totals
$even = 0;
$odd = 0;
foreach ($arr as $val) {
    if ($val % 2 == 0) {
        $even += $val;
    } else {
        $odd += $val;
    }
}

// minimum and its positions
$min = min($arr);
$minPos = array_keys($arr, $min);

// maximum and its positions
$max = max($arr);
$maxPos = array_keys($arr, $max);

// summary
echo "<p>Total of all elements = " . array_sum($arr) . "</p>";
echo "<p>Total of even elements = $even</p>";
echo "<p>Total of odd elements = $odd</p>";
echo "<p>Minimum = $min at position(s): " . implode(", ", $minPos) . "</p>";
echo "<p>Maximum = $max at position(s): " . implode(", ", $maxPos) . "</p>";


// ========================= TASK 2 =========================
// 2D associative array of colors
echo "<h2>TASK 2 - Colors (2D associative array)</h2>";

$colors = array(
    "Light"  => array("Red" => "Light Red",  "Green" => "Light Green",  "Blue" => "Light Blue"),
    "Normal" => array("Red" => "Normal Red", "Green" => "Normal Green", "Blue" => "Normal Blue"),
    "Dark"   => array("Red" => "Dark Red",   "Green" => "Dark Green",   "Blue" => "Dark Blue"),
);

$cols = array("Red", "Green", "Blue");

echo "<table>";

// header row, corner is empty
echo "<tr><th></th>";
foreach ($cols as $c) {
    echo "<th>$c</th>";
}
echo "</tr>";

// one row per shade
foreach ($colors as $row => $data) {
    echo "<tr><th>$row</th>";
    foreach ($cols as $c) {
        echo "<td>{$data[$c]}</td>";
    }
    echo "</tr>";
}
echo "</table>";


// ========================= TASK 3 =========================
// square 2D array
echo "<h2>TASK 3 - Square 2D array</h2>";

$m = array(
    array(2, -6, 8),
    array(-6, 1, 6),
    array(7, 8, -6),
);

$n = count($m); // rows = columns

// odd, even and grand totals
$oddT = 0; $evenT = 0; $all = 0;
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        $v = $m[$i][$j];
        $all += $v;
        if ($v % 2 == 0) $evenT += $v; else $oddT += $v;
    }
}

// column totals
$colTotals = array();
for ($j = 0; $j < $n; $j++) {
    $col = 0;
    for ($i = 0; $i < $n; $i++) $col += $m[$i][$j];
    $colTotals[$j] = $col;
}

// diagonals
$main = 0; $anti = 0;
for ($i = 0; $i < $n; $i++) {
    $main += $m[$i][$i];
    $anti += $m[$i][$n - 1 - $i];
}

// min and max with positions
$min3 = $max3 = $m[0][0];
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($m[$i][$j] < $min3) $min3 = $m[$i][$j];
        if ($m[$i][$j] > $max3) $max3 = $m[$i][$j];
    }
}

$minPos3 = array(); $maxPos3 = array();
for ($i = 0; $i < $n; $i++) {
    for ($j = 0; $j < $n; $j++) {
        if ($m[$i][$j] == $min3) $minPos3[] = "($i,$j)";
        if ($m[$i][$j] == $max3) $maxPos3[] = "($i,$j)";
    }
}

// matrix in the same frame as the sheet:
// corners = diagonal totals, sides = row totals, top and bottom = column totals
echo "<table>";
echo "<tr><td class=\"diag\">$main</td>";
for ($j = 0; $j < $n; $j++) {
    echo "<td><b>{$colTotals[$j]}</b></td>";
}
echo "<td class=\"diag\">$anti</td></tr>";

for ($i = 0; $i < $n; $i++) {
    $rowSum = array_sum($m[$i]);
    echo "<tr><td><b>$rowSum</b></td>";
    for ($j = 0; $j < $n; $j++) {
        echo "<td>{$m[$i][$j]}</td>";
    }
    echo "<td><b>$rowSum</b></td></tr>";
}

echo "<tr><td class=\"diag\">$anti</td>";
for ($j = 0; $j < $n; $j++) {
    echo "<td><b>{$colTotals[$j]}</b></td>";
}
echo "<td class=\"diag\">$main</td></tr>";
echo "</table>";

// summary
echo "<table>";
echo "<tr><th>Total of odd elements</th><td>$oddT</td></tr>";
echo "<tr><th>Total of even elements</th><td>$evenT</td></tr>";
echo "<tr><th>Total of all elements</th><td>$all</td></tr>";
echo "<tr><th>Main diagonal total</th><td>$main</td></tr>";
echo "<tr><th>Secondary diagonal total</th><td>$anti</td></tr>";
echo "<tr><th>Minimum</th><td>$min3 (position: " . implode(", ", $minPos3) . ")</td></tr>";
echo "<tr><th>Maximum</th><td>$max3 (position: " . implode(", ", $maxPos3) . ")</td></tr>";
echo "</table>";


// ========================= TASK 4 =========================
// student contacts
// code CA221 appears twice, so I keep records in a list instead of keying by code
echo "<h2>TASK 4 - Student contacts</h2>";

$students = array(
    array("ID" => "CA232", "Name" => "Hafsa abdinaasir mohamed", "Phone" => "0648440403", "Address" => "ali goley, kahda"),
    array("ID" => "CA223", "Name" => "Ahmed Abdi Jama",   "Phone" => "0647223201", "Address" => "Taleex, Hodan"),
    array("ID" => "CA221", "Name" => "Amina Nur Adan",    "Phone" => "0646990276", "Address" => "Macmacaanka, Dharkeynley"),
);

$scols = array("ID", "Name", "Phone", "Address");

echo "<table>";

// header
echo "<tr>";
foreach ($scols as $c) {
    echo "<th>$c</th>";
}
echo "</tr>";

// rows
foreach ($students as $row) {
    echo "<tr>";
    foreach ($scols as $c) {
        echo "<td>{$row[$c]}</td>";
    }
    echo "</tr>";
}
echo "</table>";


// ========================= TASK 5 =========================
// student transcript by semester
// Total = CW1 + MidTerm + CW2 + Final, Pass if Total >= 50
echo "<h2>TASK 5 - Student transcript</h2>";

$transcript = array(
    "Semester 1" => array(
        "subject1" => array("CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40),
        "subject2" => array("CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40),
        "subject3" => array("CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40),
    ),
    "Semester 2" => array(
        "subject1" => array("CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 0),
        "subject2" => array("CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40),
        "subject3" => array("CW1" => 9, "MidTerm" => 26, "CW2" => 10, "Final" => 40),
    ),
);

$passMark = 50;

foreach ($transcript as $semester => $subjects) {
    echo "<h3>$semester</h3>";
    echo "<table>";
    echo "<tr><th>Course</th><th>CW1</th><th>MidTerm</th><th>CW2</th><th>Final</th><th>Total</th><th>Status</th></tr>";

    foreach ($subjects as $course => $mk) {
        $total = $mk["CW1"] + $mk["MidTerm"] + $mk["CW2"] + $mk["Final"];
        $status = ($total >= $passMark) ? "Pass" : "Fail";
        $class = ($total >= $passMark) ? "pass" : "fail";
        echo "<tr><td>$course</td><td>{$mk['CW1']}</td><td>{$mk['MidTerm']}</td><td>{$mk['CW2']}</td>"
           . "<td>{$mk['Final']}</td><td>$total</td><td class=\"$class\">$status</td></tr>";
    }
    echo "</table>";
}

echo '</body>
</html>';
