<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №6</title>
</head>
<body>
    <?php
    $a = 23;
    $b = 7;
    $c = (int)($a / $b);
    echo 'В результате деления без остатка ' . $a . ' на ' . $b . ' получается ' . $c . '<br/>';
    $c = $a % $b;
    echo 'Остаток от деления ' . $a . ' на ' . $b . ' равен ' . $c;
    ?>
    <ul>
        <li><a href="/index.php">Главное меню</a></li>
        <li><a href="/1.php">1.php</a></li>
        <li><a href="/2.php">2.php</a></li>
        <li><a href="3.php">3.php</a></li>
    </ul>
</body>
</html>