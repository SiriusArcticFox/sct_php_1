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

    if ($age > 0) $rest = $age;
    if ($age > 10) $rest = $age % 10;
    if ($age > 100) $rest = $age % 100;

    echo "Имя: $name<br/>";
    echo "Возраст: $age";

    if ($rest == 1) echo ' год';
    if ($rest > 1 and $rest < 5 and ($age < 5 or $age > 20)) echo ' года';
    if ($rest > 4 or $rest == 0 or ($age > 4 and $age < 21)) echo ' лет';
    echo "<br/>";
    echo "Адрес: $adr<br/>";
}

manInfo('Василий', 104, 'ул. Иванова, 20/2');
?>
</body>