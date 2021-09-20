<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №14</title>
</head>
<body>
<?php
    function changeString($beforeChanges) {
        haveSymbol($beforeChanges);

        $beforeChanges = str_replace(" ", "_", $beforeChanges);
        $firstSymbol = mb_strtoupper(mb_substr($beforeChanges, 0, 1));

        return  $firstSymbol . mb_strtolower(mb_substr($beforeChanges, 1));
    }

    function haveSymbol(&$str) {
        $lastSymbol = mb_substr($str, -1);
        if ( $lastSymbol != '!' && $lastSymbol != '.' && $lastSymbol != '?') {
            $str = $str . '.';
        }
    }

    echo changeString('aБВ abs3Er 54?') . "<br/>";
    echo changeString('234 нетто.. ');
?>
</body>