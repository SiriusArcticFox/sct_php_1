<h1>Описание товара</h1>
<?php
if (!empty($_GET['id'])) {
    $link = mysqli_connect('127.0.0.1', 'root', 'root', 'sct');
    $sql = 'SELECT * FROM product WHERE id = ' . $_GET['id'];
    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    foreach ($rows as $row) {
        echo "
                <strong>Наименование:</strong> {$row['name']}<br/>
                <strong>Количество:</strong> {$row['count']}<br/>
                <strong>Цена:</strong> {$row['price']} ₽
                <hr/>
            ";
    }
} else {
    echo 'ID товара не передан';
}
?>