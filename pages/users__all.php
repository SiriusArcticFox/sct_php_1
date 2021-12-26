<h1>Все пользователи</h1>
<?php
    $link = mysqli_connect('127.0.0.1','root','root','sct');
    $sql = 'SELECT * FROM sct.user';
    $result = mysqli_query($link, $sql);
    $rows = mysqli_fetch_all($result,MYSQLI_ASSOC);

    foreach ($rows as $row) {
        echo "
            <h3>{$row['second_name']} {$row['first_name']}</h3>
            <h3>{$row['email']}</h3>
            <hr/>
        ";
    }
?>