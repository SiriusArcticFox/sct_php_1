<?php
    $basicTemperature = 0;
?>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №13</title>
</head>
<body>
<?php
/**
 * Увеличение температуры
 * @param $before изначальная температура
 * @param $change значение, на которое изменяется $before
 */
    function up(&$before, $change) {
        echo "<tr><td>$before</td>";
        $before += $change;
        echo "<td>+$change</td><td>$before</td></tr>";
    }
    function down(&$before, $change) {
        echo "<tr><td>$before</td>";
        $before -= $change;
        echo "<td>-$change</td><td>$before</td></tr>";

    }
?>
    <table>
        <thead>
            <tr>
                <th>До</th>
                <th>Колебание</th>
                <th>После</th>
            </tr>
        </thead>
        <tbody>
            <?php up($basicTemperature, 10); ?>
            <?php up($basicTemperature, 5); ?>
            <?php down($basicTemperature, 3); ?>
            <?php down($basicTemperature, 7); ?>
            <?php down($basicTemperature, 5); ?>
        </tbody>
    </table>
</body>
</html>