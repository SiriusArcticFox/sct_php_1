<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №18</title>
    <style>
        a { display: block; }

    </style>
</head>
<body>
<a href="?num=1">Первое четверостишье</a>
<a href="?num=2">Второе четверостишье</a>
<a href="?num=3">Третье четверостишье</a>
<a href="?num=4">Четвёртое четверостишье</a>
<hr/>
<?php
$first = "
Сегодня синели лужи<br/>
И легкий шептал ветерок.<br/>
Знай, никому не нужен<br/>
Неба зеленый песок.<br/><br/>
";
$second = "
Жили и были мы в яви,<br/>
Всюду везде одни.<br/>
Ты, как весну по дубраве,<br/>
Пьешь свои белые дни.<br/><br/>
";
$third = "
Любишь ты, любишь, знаю,<br/>
Нежные души ласкать,<br/>
Но не допустит нас к раю<br/>
Наша земная печать.<br/><br/>
";

$fourth = "
Вечная даль перед нами,<br/>
Путь наш задумчив и прост.<br/>
Даст нам приют за холмами<br/>
Грязью покрытый погост.
";

switch ($_GET['num']) {
    case 1:
        echo $first;
        break;
    case 2:
        echo $second;
        break;
    case 3:
        echo $third;
        break;
    case 4:
        echo $fourth;
        break;
    default:
        echo $first . $second . $third . $fourth;
}


?>
</body>
</html>
