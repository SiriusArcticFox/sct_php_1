<?php
ob_start(); //буферизируем вывод
include 'lib.php';
$content = ob_get_clean(); //

echo str_replace(
    '{{CONTENT}}',
    $content,
    file_get_contents('html/main.html')
);