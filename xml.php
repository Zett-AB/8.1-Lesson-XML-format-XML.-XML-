<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Массив xml файл</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/normalize.css">

<body>
    <main>
        <header>
            <h1 class="title">
                Это файл в котором мы открываем массив xml файла
            </h1>
            <?php
            $nickname = " Александр!";
            $hello = "Привет ";
            $offer = "В данном файле xml.php мы открываем с помощью кода php массив xml файла(movie.xml) и делаем  небольшое оформление странички в браузере кодом CSS.";

            echo "<h2 class='subtitle-php'>" . $hello . $nickname . "<br>" . "<br>" . $offer . "</h2>";
            ?>
        </header>
        <section class="code_php_xml">
            <?php

            $xml = simplexml_load_file("XML/movies.xml") or die("Error: Cannot create object");

            $letter = "В этом xml файле(movie.xml) содержиться информация о  ";
            $letter_edn = " фильмах.";

            echo "<h4 class='subtitle_php_xml'>" . $letter . "<span class='num'>" . count($xml) . "</span>" . $letter_edn . "</h4>";

            echo "<div class='arr'>" . "<pre>";
            print_r($xml);
            echo "</pre>" . "</div>";
            ?>
        </section>
    </main>
</body>

</html>