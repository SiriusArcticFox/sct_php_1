<?php
$count = 0;
?>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №13</title>
</head>
<body>
<?php
    /**
     * Функция выводит количество вызовов
     */

    function numberOfCalls() {
        global $count;
        $count += 1;
        return "$count <br/>";
    }

    echo numberOfCalls();
    echo numberOfCalls();
    echo numberOfCalls();
    echo numberOfCalls();
?>
</body>