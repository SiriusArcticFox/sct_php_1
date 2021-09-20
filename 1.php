<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №14</title>
</head>
<body>
<?php

    function getDate( $date ) {
        return date('d.m.Y', strtotime($date));
    }
    echo getDate('2020-01-28');

?>
</body>
</html>