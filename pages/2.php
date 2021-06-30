<?php
    $firstImg = '/img/nature-5.jpg';
    $secondImg = '/img/nature-8.jpg';
    $thirdImg = '/img/nature-10.jpg';

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
    <img src="<?=$firstImg?>" height="250" alt=""><br/>
    <img src="<?=$secondImg?>" height="250" alt=""><br/>
    <img src="<?=$thirdImg?>" height="250" alt=""><br/>
<?php
    $thirdImg = '/img/nature-6.jpg';
    $secondImg = '/img/nature-4.jpg';
?>
    <img src="<?=$secondImg?>" height="250" alt=""><br/>
    <img src="<?=$thirdImg?>" height="250" alt=""><br/>

    <ul>
        <li><a href="<?=$mainPage?>">Главная страница</a></li>
        <li><a href="<?=$firstPage?>">Страница 1.php</a></li>
        <li><a href="<?=$secondPage?>">Страница 2.php</a></li>
    </ul>
</body>