<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №12</title>
</head>
<body>
<?php
    /**
     * Функция выводит возраст, адрес и имя человека
     *
     * @param string $name Имя
     * @param string $adr Адрес (необязательное значение)
     * @param int $age Возраст (необязательное значение)
     * @return string
     */

    function manInfo ($name, $age = null, $adr = null) {
        $result = "Имя: $name. ";
        if (is_int($age)) {
            $age = abs($age);
            $rest = 0;

            if ($age > 0) $rest = $age;
            if ($age > 10) $rest = $age % 10;
            if ($age > 100) $rest = $age % 100;

            $result .= "Возраст: $age ";

            if ($rest == 1) $result .= ' год. ';
            if ($rest > 1 and $rest < 5 and ($age < 5 or $age > 20)) $result .= ' года. ';
            if ($rest > 4 or $rest == 0 or ($age > 4 and $age < 21)) $result .= ' лет. ';
        }
        if (is_string($adr) && $adr != '') {
            $result .= "Адрес: $adr.";
        }
        return $result . "<br/>";
    }


    echo manInfo('Василий', 14, 'ул. Иванова, 20/2');
    echo manInfo('Николай', null, 'ул. Островского, 4/4');
    echo manInfo('Александр');
?>
</body>