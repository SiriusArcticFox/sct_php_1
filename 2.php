<?php
$counter = isset($_COOKIE['count']) ? $_COOKIE['count'] : 1;
$counter++;

setcookie('count', $counter, time() + 7200);
print_r('Счётчик: ' . $counter);