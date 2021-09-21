<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №15</title>
</head>
<body>
<?php
    function numEquivalence($a, $b) {
        if ($a > $b) return "$b $a";
        if ($a < $b) return "$a $b";
        return "Числа равны";
    }
    echo numEquivalence(10, 29) . "<br/>";
    echo numEquivalence(56, 18) . "<br/>";
    echo numEquivalence(33, 33) . "<br/>";
?>
</body>
</html>