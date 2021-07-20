<?php
$page = 3;
$a = 417;
$b = -741;
?>

<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №7</title>
</head>
<body>
    <?php
    if (($a >= 0) and ($b >= 0)) {
        echo $a . ' + ' . $b . ' = ' . ($a + $b);
    } else {
        if ($a >= $b) { echo $a . ' - ' . $b . ' = ' . ($a - $b); }
        else { echo $b . ' - ' . $a . ' = ' . ($b - $a); }
    }
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