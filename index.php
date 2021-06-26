<html lang="ru">
    <head>
        <title>Урок №3</title>
    </head>
    <body>
        <h1>
            <?php echo 'Приветствую'; ?>
        </h1>
        <?php
        echo '<p>Это первое сообщение, что вывели через команду echo.<br>';
        echo 'А это второе сообщение, которое вывели через команду echo.</p>';
        ?>

        <img src="<?='https://www.meteovesti.ru/pics/src/63529617232.jpg'?>" alt="nature"/><br/>

        <a href="<?='/'?>">Ссылка на самого себя</a><br/>
        <a href="<?='/php/1.php'?>">Ссылка на файл 1.php</a><br/>
        <a href="<?='/php/2.php'?>">Ссылка на файл 2.php</a>
    </body>
</html>
