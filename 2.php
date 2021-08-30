<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №11</title>
</head>
<body>
<?php
function getResult ($first, $second, $name) {
    if ($name == 'sum') echo ($first + $second);
    if ($name == 'subtr') echo ($first - $second);
    if ($name == 'mult') echo ($first * $second);
    if ($name == 'div') echo  ($first / $second);
    echo '<br/>';
}

getResult(47,52, 'subtr');
?>
</body>