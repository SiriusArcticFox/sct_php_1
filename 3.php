<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №15</title>
    <style>
        table { border-collapse: collapse; }
            th { text-align: center }
            th, td {
                padding: 10px;
                border: 1px solid black;
                background: #f0e68c;
            }
            tr > th:last-child,
            tr > td:last-child { background: #e0ffff; }
    </style>
</head>
<body>
<?php
    function createTable(){
      echo "<table><thead><tr><th>№ п/п</th><th>Наименование</th><th>Цена, руб</th></tr></thead><tbody>";
      for ($i = 0; $i < 3; $i++){
          echo "<tr><td>$i</td><td>";
          switch ($i) {
              case 0:
                  echo "Карандаш цветной</td><td>20,00";
                  break;
              case 1:
                  echo "Линейка 20см</td><td>30,00";
                  break;
              default:
                  echo "Акварель</td><td>350,00";
          }
          echo "</td></tr>";
      }
      echo "</tbody></table>";
    }

    createTable();
?>
</body>
</html>
