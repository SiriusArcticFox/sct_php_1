<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №19</title>
</head>
<body>

<form method="post">
    <input name="firstValue" placeholder="Первое значение" type="text">
    <input name="secondValue" placeholder="Второе значение" type="text">
    Выберите операцию:
    <select name="operation">
        <option></option>
        <option value="Сложение">Сложение</option>
        <option value="Вычитание">Вычитание</option>
        <option value="Деление">Деление</option>
        <option value="Умножение">Умножение</option>
    </select>
    <button>Подсчитать</button>
</form>
<hr/>
<?php
$firstValue = $_POST['firstValue'];
$secondValue = $_POST['secondValue'];
$operation = $_POST['operation'];
getCalculations($firstValue, $secondValue, $operation);


function getCalculations($firstValue, $secondValue, $operation) {
    if (filter_var($firstValue, FILTER_VALIDATE_FLOAT ) == '') {
        echo 'Ошибка! Первое значение не является числом';
        return;
    }
    if (filter_var($secondValue, FILTER_VALIDATE_FLOAT ) == '') {
        echo 'Ошибка! Второе значение не является числом';
        return;
    }
    if (!$operation) {
        echo 'Ошибка! Выберите параметр из списка';
        return;
    }
    switch ($operation) {
        case 'Сложение' :
            echo $firstValue . ' + ' . $secondValue . ' = ' . ($firstValue + $secondValue);
            break;
        case 'Вычитание' :
            echo $firstValue . ' - ' . $secondValue . ' = ' . ($firstValue - $secondValue);
            break;
        case 'Деление' :
            if ($secondValue != 0) {
                echo $firstValue . ' / ' . $secondValue . ' = ' . ($firstValue / $secondValue);
            } else {
                echo 'Делить на 0 нельзя';
            }
            break;
        case 'Умножение' :
            echo $firstValue . ' * ' . $secondValue . ' = ' . ($firstValue * $secondValue);
            break;
    }
}
?>
</body>
</html>