<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        table { border-collapse: collapse; }
        td { border: 1px solid #999; padding: 2px 4px; text-align: center; }
        caption { font-size: 18px; }
    </style>
</head>
<body>
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
</body>
</html>
