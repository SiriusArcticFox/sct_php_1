<h1>Каталог товаров</h1>
<?php
$sql = 'SELECT * FROM product';
$result = mysqli_query(getConnect(), $sql);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

if (!empty($rows)) {
    foreach ($rows as $row) {
        echo "
            <a href='?page=products__one&id={$row['id']}'>
                <strong>Наименование:</strong> {$row['name']}<br/>
                <strong>Цена:</strong> {$row['price']} ₽
            </a>
            <hr/>
        ";
    }
}
?>