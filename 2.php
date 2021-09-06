<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №12</title>
</head>
<body>
<?php
    /**
     * Возвращает наибольшее значение
     * @param integer $a
     * @param integer $b
     * @param integer $c (необязательное значение)
     * @return int
     */
    function getResult ($a, $b, $c = null) {
        echo "Переданные значения: $a, $b, $c.<br/>";
        $result = $a;
        if ($b > $a) $result = $b;
        if (!is_null($c)) {
            $c = (int)$c;
            echo "c = (int)$c<br/>";
            if ($c > $result) $result = $c;
        }
        return $result;
    }

    echo 'Наибольшее значение ' . getResult(47,52, 'su2btr21') . '<br/><br/>';
    echo 'Наибольшее значение ' . getResult(7,-52, 20) . '<br/><br/>';
    echo 'Наибольшее значение ' . getResult(7,-52) . '<br/><br/>';
?>
</body>