<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №18</title>
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
    if (!empty($_POST)) {
        getCalculations();
    }
    $_POST = null;

    function getCalculations() {
        $firstValue = $_POST['firstValue'];
        $secondValue = $_POST['secondValue'];

        if (filter_var($firstValue, FILTER_VALIDATE_FLOAT ) == '') {
            echo 'Ошибка! Первое значение не является числом';
            return;
        }
        if (filter_var($secondValue, FILTER_VALIDATE_FLOAT ) == '') {
            echo 'Ошибка! Второе значение не является числом';
            return;
        }
        if (!$_POST['operation']) {
            echo 'Ошибка! Выберите параметр из списка';
            return;
        }
        switch ($_POST['operation']) {
            case 'Сложение' :
                echo $_POST['firstValue'] . ' + ' . $_POST['secondValue'] . ' = ' . ($firstValue + $secondValue);
                break;
            case 'Вычитание' :
                echo $_POST['firstValue'] . ' - ' . $_POST['secondValue'] . ' = ' . ($firstValue - $secondValue);
                break;
            case 'Деление' :
                if ($secondValue != 0) {
                    echo $_POST['firstValue'] . ' / ' . $_POST['secondValue'] . ' = ' . ($firstValue / $secondValue);
                } else {
                    echo 'Делить на 0 нельзя';
                }
                break;
            case 'Умножение' :
                echo $_POST['firstValue'] . ' * ' . $_POST['secondValue'] . ' = ' . ($firstValue * $secondValue);
                break;
        }
    }
?>
</body>
</html>