<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №15</title>
</head>
<body>
<?php
    function fromOneToTen() {
        for ($i = 0; $i < 11; $i++) {
            if ($i == 0) {
                echo "$i - тоже чётное<br/>";
            } else {
                if (($i % 2) == 0) {
                    echo "$i - чётное<br/>";
                } else {
                    echo "$i - нечётное<br/>";
                }
            }
        }
    }
    fromOneToTen();
?>
</body>
</html>