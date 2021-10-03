<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №17</title>
</head>
<body>
<?php
$a = [
    [
        'name' => 'Стул 1',
        'price' => 20,
        'category' => 1,
    ],
    [
        'name' => 'Стул 2',
        'price' => 210,
        'category' => 2,
    ],
    [
        'name' => 'Стул 3',
        'price' => 15,
        'category' => 2,
    ],

];

$sorting = function ($a, $b) {
    if ($a['price'] == $b['price']) return 0;
    if ($a['price'] < $b['price']) return -1;
    return 1;
};
usort($a, $sorting );
var_dump($a);

?>
</body>
</html>