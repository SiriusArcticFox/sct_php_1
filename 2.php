<html lang="ru">
<head>
    <meta charset="utf-8">
    <title>Урок №16</title>
</head>
<body>
<?php
$newsLinks = [
    'astrakhan-24.ru' => 'https://astrakhan-24.ru/news/misc/astrakhancev_zhdjot_uluchshenie_pogody_i_novyj_kholodnyj_front_79577',
    'astrakhan.aif.ru' => 'https://astrakhan.aif.ru/society/registrirovat_smert_v_astrahani_budut_po_novomu_adresu',
    'punkt-a.info' => 'https://punkt-a.info/news/novosti-kratko/v-astrakhani-snesli-avariynyy--dom',
    'astrakhan.su' => 'https://astrakhan.su/news/accidents/policija-snjala-s-linii-marshrutku-178-astrahan-birjukovka-iz-za-sostojanija-voditelja/',
];
foreach ($newsLinks as $title => $link) {
    echo "<a href='$link'>$title</a><br/>";
}
?>
</body>
</html>