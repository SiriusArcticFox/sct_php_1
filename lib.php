<?php
function getPage($page)
{
    if ($page == '2') {
        include 'page/2.php';
    } else {
        include 'page/1.php';
    }
    getDateTimeAndPage($page);
}
function getDateTimeAndPage($page){
    if ($page == '')  {
        $page = 'index';
    }
    file_put_contents('log.php', date('d.m.Y, H:m:s') . ", $page.php", FILE_APPEND);
}
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    echo getPage($_GET['page']);
}