<h1>Все пользователи</h1>
<?php
    $sql = 'SELECT * FROM sct.user';
    $result = mysqli_query(getConnect(), $sql);
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

    if (!empty($rows)) {
        foreach ($rows as $row) {
            echo "
            <h3>{$row['second_name']} {$row['first_name']}</h3>
            <h3>{$row['email']}</h3>
            <hr/>
        ";
        }
    }
?>