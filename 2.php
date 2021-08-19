<?php
$x1 = rand(-100, 100);
$x2 = rand(-100, 100);
$x3 = rand(-100, 100);
?>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №10</title>
</head>
<body>
Числа в порядке возрастания: <br/>
<?php
if (($x1 < $x2) and ($x2 < $x3)) { echo $x1 . ', ' . $x2 . ', ' . $x3; }
if (($x1 < $x3) and ($x3 < $x2)) { echo $x1 . ', ' . $x3 . ', ' . $x2; }
if (($x2 < $x1) and ($x1 < $x3)) { echo $x2 . ', ' . $x1 . ', ' . $x3; }
if (($x2 < $x3) and ($x3 < $x1)) { echo $x2 . ', ' . $x3 . ', ' . $x1; }
if (($x3 < $x2) and ($x2 < $x1)) { echo $x3 . ', ' . $x2 . ', ' . $x1; }
if (($x3 < $x1) and ($x1 < $x2)) { echo $x3 . ', ' . $x1 . ', ' . $x2; }
?>