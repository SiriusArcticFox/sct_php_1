<?php
session_start();
$error_message = '';

if (isset($_POST['submit'])) {
    if ($_POST['login'] == 'Admin' && $_POST['password'] == '121121') {
        $_SESSION['login'] = 'Admin';
    } else $error_message = 'Введены неверные реквизиты. Повторите попытку';
}
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8" />
    <title>Авторизация</title>
</head>
<body>
<?php
    if (!isset($_SESSION['login'])) : print_r($error_message);
?>
    <form method="post">
        <input type="text" name="login" placeholder="Введите логин" />
        <input type="password" name="password" placeholder="Введите пароль">
        <input type="submit" name="submit" value="Войти в систему">
    </form>
<?php
    else : echo "Приветствуем, {$_SESSION['login']}";
    endif; ?>
</body>
</html>
