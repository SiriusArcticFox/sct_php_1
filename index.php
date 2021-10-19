<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №19</title>
</head>
<body>
<a href="?page=1">Калькулятор</a><br/>
<a href="?page=2">2-ая страница</a><br/>
<a href="?page=3">3-я страница</a><br/>
<hr/>
<?php
    function getPage($page) {
        switch ($page) {
            case '2':
                include 'page/2.php';
                break;
            case '3';
                include 'page/3.php';
                break;
            default:
                include 'page/1.php';
        }
    }

    getPage($_GET['page']);
?>
</body>
</html>