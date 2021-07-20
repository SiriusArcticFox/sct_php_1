<?php
$page = 2;
$a = 4;
$b = 7;
$c = 1;
?>

<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №7</title>
</head>
<body>
    Числа в порядке возрастания: <br/>
    <?php
        if (($a < $b) and ($b < $c)) { echo $a . ', ' . $b . ', ' . $c; }
        if (($a < $c) and ($c < $b)) { echo $a . ', ' . $c . ', ' . $b; }
        if (($b < $a) and ($a < $c)) { echo $b . ', ' . $a . ', ' . $c; }
        if (($b < $c) and ($c < $a)) { echo $b . ', ' . $c . ', ' . $a; }
        if (($c < $b) and ($b < $a)) { echo $c . ', ' . $b . ', ' . $a; }
        if (($c < $a) and ($a < $b)) { echo $c . ', ' . $a . ', ' . $b; }
    ?>
    <ul>
        <li>
            <a href="/1.php">
                <?php
                if ($page == 1) echo '<strong>1.php</strong>';
                else echo '1.php'; ?>
            </a>
        </li>
        <li>
            <a href="/2.php">
                <?php
                if ($page == 2) echo '<strong>2.php</strong>';
                else echo '2.php'; ?>
            </a>
        </li>
        <li>
            <a href="/3.php">
                <?php
                if ($page == 3) echo '<strong>3.php</strong>';
                else echo '3.php'; ?>
            </a>
        </li>
    </ul>
</body>
</html>