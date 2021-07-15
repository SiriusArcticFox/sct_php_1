<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №6</title>
</head>
<body>
    <?php
    $a = 4;
    $b = 7;
    $c = $a + $b;
    ?>
    <h1>Математические операции</h1>

    <?php
    echo "<p>a = {$a}, b = {$b}</p>";

    echo 'Сложение: a + b = ' . $c . '<br/>';
    $c = $a - $b;
    echo 'Вычитание: a - b = ' . $c . '<br/>';
    $c = $a * $b;
    echo 'Умножение: a * b = ' . $c . '<br/>';
    $c = $a / $b;
    echo 'Деление: a / b = ' . $c . '<br/>';
    echo 'Возведение в степень: a^b = ' . pow($a, $b) . '<br/>';

    ?>
    <ul>
        <li><a href="/index.php">Главное меню</a></li>
        <li><a href="/1.php">1.php</a></li>
        <li><a href="/2.php">2.php</a></li>
        <li><a href="3.php">3.php</a></li>
    </ul>
</body>
</html>
