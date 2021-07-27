<?php
    $a = 4;
    $b = 7;
    $operation = 'subtract'; //add, subtract, multiply, divide
    $isAvailableCalculation = true;
?>
<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №8</title>
</head>
<body>
    <?php
        if ($isAvailableCalculation) {
            if ($operation == 'add') { echo 'a + b = ' . ($a + $b); }
            if ($operation == 'subtract') { echo 'a - b = ' . ($a - $b); }
            if ($operation == 'multiply') { echo 'a * b = ' . ($a * $b); }
            if ($operation == 'divide') { echo 'a / b = ' . ($a / $b); }
        } else { echo 'Простите, выполнить математическую операцию невозможно'; }
    ?>

    <br />

    <select>
        <option <?php if ($operation == 'add') echo 'selected'; ?> value="+">+</option>
        <option <?php if ($operation == 'subtract') echo 'selected'; ?>>-</option>
        <option <?php if ($operation == 'multiply') echo 'selected'; ?>>*</option>
        <option <?php if ($operation == 'divide') echo 'selected'; ?>>/</option>
    </select>

</body>
</html>