<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №8</title>
</head>
<body>
<?php
$x;
$c = isset($x);
var_dump($c); //bool(false)
?>
<br />
<?php
$x = "";
$c = isset($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x = null;
$c = isset($x);
var_dump($c); //bool(false)
?>
<br />
<?php
$x = array();
$c = isset($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x = array('a', 'b');
$c = isset($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x = false;
$c = isset($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x = true;
$c = isset($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x = 1;
$c = isset($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x = 42;
$c = isset($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x = 0;
$c = isset($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x = -1;
$c = isset($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x ="1";
$c = isset($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x = "0";
$c = isset($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x = "-1";
$c = isset($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x = "php";
$c = isset($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x ="true";
$c = isset($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x = "false";
$c = isset($x);
var_dump($c); //bool(true)
?>

</body>
</html>