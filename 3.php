<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №8</title>
</head>
<body>
<?php
$x;
$c = empty($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x = "";
$c = empty($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x = null;
$c = empty($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x = array();
$c = empty($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x = array('a', 'b');
$c = empty($x);
var_dump($c); //bool(false)
?>
<br />
<?php
$x = false;
$c = empty($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x = true;
$c = empty($x);
var_dump($c); //bool(false)
?>
<br />
<?php
$x = 1;
$c = empty($x);
var_dump($c); //bool(false)
?>
<br />
<?php
$x = 42;
$c = empty($x);
var_dump($c); //bool(false)
?>
<br />
<?php
$x = 0;
$c = empty($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x = -1;
$c = empty($x);
var_dump($c); //bool(false)
?>
<br />
<?php
$x ="1";
$c = empty($x);
var_dump($c); //bool(false)
?>
<br />
<?php
$x = "0";
$c = empty($x);
var_dump($c); //bool(true)
?>
<br />
<?php
$x = "-1";
$c = empty($x);
var_dump($c); //bool(false)
?>
<br />
<?php
$x = "php";
$c = empty($x);
var_dump($c); //bool(false)
?>
<br />
<?php
$x ="true";
$c = empty($x);
var_dump($c); //bool(false)
?>
<br />
<?php
$x = "false";
$c = empty($x);
var_dump($c); //bool(false)
?>

</body>
</html>