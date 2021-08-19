<?php
$a = rand(1, 20);
?>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №10 </title>
</head>
<body>
<?php
    switch ($a) {
        case 20 :
            break;
        default :
            echo '$a = ' . $a;
    }
?>
</body>
</html>