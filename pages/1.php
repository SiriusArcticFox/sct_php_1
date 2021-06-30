<?php
    $name = "Василий ";
    $sex = 'male';
    $age = 30;
    $residenceAddress = 'г. Санкт-Петербург';
    $placeOfResidence = 'г. Астрахань';

    $mainPage   = '/';
    $firstPage  = '/pages/1.php';
    $secondPage = '/pages/2.php';
?>
<html lang="ru">
<head>
    <title>Title</title>
</head>
</html>
<body>
    <p>
        <strong>Имя:</strong> <?=$name?> <br/>
        <strong>Пол:</strong> <?=$name?> <br/>
        <strong>Возраст:</strong> <?=$name?>
    </p>
    <p>
        <strong>Адрес прожевания:</strong> <?=$name?> <br/>
        <strong>Адрес прописки:</strong> <?=$name?>
    </p>

    <ul>
        <li><a href="<?=$mainPage?>">Главная страница</a></li>
        <li><a href="<?=$firstPage?>">Страница 1.php</a></li>
        <li><a href="<?=$secondPage?>">Страница 2.php</a></li>
    </ul>
</body>