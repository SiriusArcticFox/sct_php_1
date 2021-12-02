<?php
function getCalculations($newString) {
    if (empty($newString)) {
        return;
    }
    $replace = array(
        'а' => 'a', 'б' => 'b', 'в' => 'v', 'г' => 'g', 'д' => 'd', 'е' => 'ye', 'ё' => 'yo', 'ж' => 'j', 'з' => 'z', 'и' => 'i',
        'й' => 'y', 'к' => 'k', 'л' => 'l', 'м' => 'm', 'н' => 'n', 'о' => 'o', 'п' => 'p', 'р' => 'r', 'с' => 's', 'т' => 't',
        'у' => 'u', 'ф' => 'f', 'х' => 'h', 'ц' => 'c', 'ч' => 'ch', 'ш' => 'sh', 'щ' => 'sch', 'ъ' => '', 'ы' => 'y', 'ь' =>'',
        'э' => 'e', 'ю' => 'yu', 'я' => 'ya'
    );
    echo 'Строка до: ' . $newString . '<br /> Строка после: ' . strtr($newString, $replace);
}
?>
<form method="get">
    <input name="newString" placeholder="Введите строку" type="text">
    <button>Передать строку</button>
</form>
<hr/>
<?php
//!empty($_POST['firstValue'])
if ($_SERVER['REQUEST_METHOD'] == 'GET') {
    getCalculations($_GET['newString']);
}
?>