<?php

/**
 * Возвращает контент для вывода
 *
 * @return false|string
 */
function getContent()
{
    ob_start();
    include getPageName();
    return ob_get_clean();
}

/**
 * Возвращает полный путь до фыйла - контента
 *
 * @return string
 */
function getPageName()
{
    $mainPage = __DIR__ . '/pages/main.php';
    if (empty($_GET['page'])) {
         return $mainPage;
    }

    $pageName = __DIR__ . '/pages/' . trim($_GET['page']) . '.php';
    if (file_exists($pageName)) {
        return $pageName;
    }

    return $mainPage;
}

/**
 * Возвращает меню
 *
 * @return string
 */
function getMenu()
{
    return '
        <ul>
            <li><a href="?page=main">Главная</a></li>
            <li><a href="?page=users__all">Все пользователи</a></li>
            <li><a href="?page=products__all">Все продукты</a></li>
            <li><a href="?page=products__add">Добавить товар</a></li>
            <li><a href="?page=auth-form">Авторизация</a></li>
        </ul>
    ';
}