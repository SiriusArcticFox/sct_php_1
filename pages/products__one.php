<h1>Описание товара</h1>
<?php
if (!empty($_GET['id'])) {
    $sql = 'SELECT * FROM product WHERE id = ' . $_GET['id'];
    $result = mysqli_query(getConnect(), $sql);
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);

    if (!empty($rows)) {
        foreach ($rows as $row) {
            echo "
                    <strong>Наименование:</strong> {$row['name']}<br/>
                    <strong>Количество:</strong> {$row['count']}<br/>
                    <strong>Цена:</strong> {$row['price']} ₽
                    <hr/>
                ";
        }
    }
} else {
    echo 'ID товара не передан';
}
?>