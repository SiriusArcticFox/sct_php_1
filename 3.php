<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №17</title>
</head>
<body>
<?php
    $json = '["89050506568", "89050506545", "335566"]';
    $newArray = json_decode($json);
    var_dump($newArray);

    echo '<br/>';

    $json = json_encode($newArray);
    var_dump($json);
?>
</body>
</html>
