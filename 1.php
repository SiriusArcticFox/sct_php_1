<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №18</title>
</head>
<body>
<a href="?login=friend">Логин</a>
<a href="?password=mHg7dfg5">Пароль</a>
<a href="?age=47">Возраст</a>
<?php
function getUserData() {
    if ($_GET){
        if ($_GET['login']) {
            echo "Логин пользователя:" . $_GET['login'];
        }
        if ($_GET['password']) {
            echo "Пароль пользователя:" . $_GET['password'];
        }
        if ($_GET['age']) {
            echo "Возраст пользователя:" . $_GET['age'];
        }
    } else {
        echo "Данных нет";
    }
}
getUserData();
?>

</body>
</html>