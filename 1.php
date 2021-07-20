<?php
$page = 1;
$int = rand(-20, 20);
?>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №7</title>
</head>
<body>
    <?php
    if ($int > -1) { echo 'Число (' . $int . ') положительное'; }
    else { echo 'Число (' . $int . ') отрицательное'; }
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