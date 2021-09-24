<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №16</title>
    <style>
        table { border-collapse: collapse; }
            th { text-align: center }
            th, td {
                padding: 10px;
                border: 1px solid black;
                background: #f0e68c;
            }
            tr > th:last-child,
            tr > td:last-child { background: #e0ffff; }
    </style>
</head>
<body>
<?php
    $products = [
        'мобильный телефон' => [
            'Xiaomi Redmi Note 9 Pro',
            'Samsung Galaxy A32',
            'Huawei P40 lite',
        ],
        'мебель' => [
            '3-местный диван LIDHULT',
            'Шкаф книжный со стеклянными дверьми',
        ],
        'канцелярия' => [
            'Краски акварельные "Белые ночи"',
            'Клей-карандаш Brauberg',
        ],
        'видеокарта' => [ 'PALIT NVIDIA GeForce RTX 3060' ],
        'игровая консоль' => [
            'Nintendo Switch',
            'Xbox Series X'
        ],
    ];

    foreach ($products as $i => $value) {
        echo "$i: ";
        foreach ($value as $j) {
            echo " $j;";
        }
        echo '<br/>';
    }
?>
</body>
</html>
