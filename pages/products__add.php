<?php
if (!empty($_POST['product__name'])) {
    if (empty($_POST['product__count'])) $_POST['product__count'] = 0;
    if (empty($_POST['product__price'])) $_POST['product__price'] = 0;

    $sql = "INSERT INTO `product` (`name`, `count`, `price`, `category_id`) VALUES ('{$_POST['product__name']}','{$_POST['product__count']}','{$_POST['product__price']}',0)";

    if (mysqli_query(getConnect(), $sql)) {
        echo 'Товар добавлен!<br/>';
    }
} else {
    print_r('Введите наименование товара');
}
?>

<h1>Добавить товар</h1>
<form method="post">
    <input placeholder="Имя товара" type="text" name="product__name"/>
    <input placeholder="Количество" type="number" name="product__count"/>
    <input placeholder="Цена" type="number" step="any" name="product__price"/>

    <input name="submit" type="submit" value="Добавтить">
</form>


