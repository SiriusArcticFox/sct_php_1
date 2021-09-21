<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №15</title>
    <style>
        table { border-collapse: collapse; }
            td {
                padding: 5px 7px;
                text-align: center;
                border: 1px solid black;
            }
    </style>
</head>
<body>
<?php
    function createTable()
    {
        echo "<table><thead>";
            for ($i = 1; $i < 10; $i++) {
                echo "<tr>";
                for ($j = 1; $j < 10; $j++) {
                    echo "<td>" . ($i * $j) . "</td>";
                }
                echo "</tr>";
            }
        echo "</tbody></table>";
    }

    createTable();
?>
</body>
</html>