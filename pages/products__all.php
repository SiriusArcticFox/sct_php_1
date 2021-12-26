<h1>Каталог товаров</h1>
<?php
$link = mysqli_connect('127.0.0.1','root','root','sct');
$sql = 'SELECT * FROM product';
$result = mysqli_query($link, $sql);
$rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

foreach ($rows as $row) {
    echo "
            <a href='?page=products__one&id={$row['id']}'>
                <strong>Наименование:</strong> {$row['name']}<br/>
                <strong>Цена:</strong> {$row['price']} ₽
            </a>
            <hr/>
        ";
}
?>