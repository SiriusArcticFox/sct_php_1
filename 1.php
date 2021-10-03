<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №17</title>
</head>
<body>
<?php

function isNotInArray ($firstList, $secondList) {
    for ( $i = 0; $i < count($firstList); $i++ ) {
        if ( !in_array($firstList[$i], $secondList) ) {
            echo $firstList[$i] . '; ';
        }
    }
}

$oldRoles = [4,5,7,20,6,74];
$newRoles = [3,20,5,1,9,34];

echo "Новые роли: " . implode (',', $oldRoles) . "<br/>";
echo "Роли, которые отсутствуют в БД :";
isNotInArray($oldRoles,$newRoles);

echo "<hr/>";

echo "Старые роли: " . implode (',', $newRoles) . "<br/>";
echo "Роли, которые будут удалены из БД: ";
isNotInArray($newRoles,$oldRoles);
?>

</body>
</html>