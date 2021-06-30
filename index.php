<?php
$title = 'Название страницы';

$mainPage   = '/';
$firstPage  = '/pages/1.php';
$secondPage = '/pages/2.php';
?>
<html lang="ru">
<head>
    <title><?=$title?></title>
</head>
</html>
<body>
    <h2><?=$title?></h2>

    <ul>
        <li><a href="<?=$mainPage?>">Главная страница</a></li>
        <li><a href="<?=$firstPage?>">Страница 1.php</a></li>
        <li><a href="<?=$secondPage?>">Страница 2.php</a></li>
    </ul>
</body>