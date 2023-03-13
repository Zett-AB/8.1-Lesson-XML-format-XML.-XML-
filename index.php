<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 8.1. Работа с XML. Чтение XML и вывод в браузер в виде массива</title>
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="normalize.css">
</head>

<body>
    <main>
        <header>
            <h1 class="title">
                Урок 8.1. Работа с XML. Чтение XML и вывод в браузер в виде массива
            </h1>
            <h4 class="subtitle">
                Познакомимся с XML форматом.<br>
                Данный формат используют для взаимодействия сервисов через API.<br>
                С помощью библиотеки SimpleXML прочитаем этот файл и выведем в браузер массив данных.
            </h4>
        </header>
        <section class="code-php">
            <div>
                <?php
                $nickname = "Александр!";
                $hello = "Привет ";
                $offer = "Узнаем, что такое XML формат/файл, для чего он нужен и как с ним работать.  
                                <br>
                                Научимся выводить в браузер массив информации из XML формата/файла.";

                echo "<h2 class='subtitle-php'>" . $hello . $nickname . "<br>" . "<br>" . $offer . "</h2>";
                ?>
            </div>
        </section>
        <section class="begin">
            <div class="part_1">

            </div>
            <div class=""></div>
            <div class=""></div>
        </section>

    </main>

</body>

</html>