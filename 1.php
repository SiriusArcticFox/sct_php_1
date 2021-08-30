<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №11</title>
</head>
<body>
<?php
function manInfo ($name, $age, $adr) {
    $age = abs($age);
    $rest = 0;

    if ($age > 100) $rest = $age % 100;
    if ($age > 10) $rest = $age % 10;
    if ($age > 0) $rest = $age;

    echo "Имя: $name<br/>";
    echo "Возраст: $age";
    if ($rest == 1) echo ' год';
    if ($rest > 1 and $rest < 5) echo ' года';
    if ($rest > 4 or $rest == 0) echo ' лет';
    echo "<br/>";
    echo "Адрес: $adr<br/>";
}
manInfo(10,10, 'ул. Иванова, 20/2');
?>
</body>