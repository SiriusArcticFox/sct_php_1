<?php
$x1 = rand(-100, 100);
$x2 = rand(-100, 100);
?>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №10 </title>
</head>
<body>
<?php
switch ($x1) {
    case abs($x1) :
        if ($x2 > -1) {
            echo "$x1 и $x2 положительные";
        } else echo "$x1 и $x2 имеют разные знаки";
        break;
    default :
        if ($x2 > -1) {
            echo "$x1 и $x2 имеют разные знаки";
        } else echo "$x1 и $x2 отрицательные";
}
?>
</body>
</html>