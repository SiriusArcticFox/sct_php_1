<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №8</title>
</head>
<body>
<?php
$x;
$c = (bool)$x;
var_dump($c); //bool(false)
?>
<br />
<?php
$x = "";
$c = (bool)$x;
var_dump($c); //bool(false)
?>
<br />
<?php
$x = null;
$c = (bool)$x;
var_dump($c); //bool(false)
?>
<br />
<?php
$x = array();
$c = (bool)$x;
var_dump($c); //bool(false)
?>
<br />
<?php
$x = array('a', 'b');
$c = (bool)$x;
var_dump($c); //bool(true)
?>
<br />
<?php
$x = false;
$c = (bool)$x;
var_dump($c); //bool(false)
?>
<br />
<?php
$x = true;
$c = (bool)$x;
var_dump($c); //bool(true)
?>
<br />
<?php
$x = 1;
$c = (bool)$x;
var_dump($c); //bool(true)
?>
<br />
<?php
$x = 42;
$c = (bool)$x;
var_dump($c); //bool(true)
?>
<br />
<?php
$x = 0;
$c = (bool)$x;
var_dump($c); //bool(false)
?>
<br />
<?php
$x = -1;
$c = (bool)$x;
var_dump($c); //bool(true)
?>
<br />
<?php
$x ="1";
$c = (bool)$x;
var_dump($c); //bool(true)
?>
<br />
<?php
$x = "0";
$c = (bool)$x;
var_dump($c); //bool(false)
?>
<br />
<?php
$x = "-1";
$c = (bool)$x;
var_dump($c); //bool(true)
?>
<br />
<?php
$x = "php";
$c = (bool)$x;
var_dump($c); //bool(true)
?>
<br />
<?php
$x ="true";
$c = (bool)$x;
var_dump($c); //bool(true)
?>
<br />
<?php
$x = "false";
$c = (bool)$x;
var_dump($c); //bool(true)
?>

</body>
</html>