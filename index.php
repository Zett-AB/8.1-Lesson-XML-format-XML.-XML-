<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Урок 8.1. Работа с XML. Чтение XML и вывод в браузер в виде массива</title>
    <link rel="stylesheet" href="CSS/style.css">
    <link rel="stylesheet" href="CSS/normalize.css">
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
                <h4 class="subtitle">
                    Краткое вступление и основные понятия.
                </h4>
                <div class="about_xml">
                    <p>
                        <b>XML</b>(eXtensible Markup Language - расширяемый язык разметки) - это язык программирования для создания логической структуры данных, их хранения и передачи в виде удобном как для компьютера, так и для человека.
                    </p>
                    <p>
                        Кратко о XML:
                    </p>
                    <ul>
                        <li>
                            <b>XML</b> – язык разметки, который напоминает HTML;
                        </li>
                        <li>
                            <b>XML</b> предназначен для передачи данных, а не для их отображения;
                        </li>
                        <li>
                            <b>Теги XML</b> не предопределены. Вы должны сами определять нужные теги;
                        </li>
                        <li>
                            <b>XML</b> описан таким образом, чтобы быть самоопределяемым;
                        </li>
                    </ul>
                    <p>
                        XML решает задачу хранения и транспортировки данных, фокусируясь на том, что такое эти самые данные.
                    </p>
                    <p>
                        XML ничего не делает и был создан для структурирования, хранения и передачи информации.
                    </p>
                    <p>
                        <b>В XML вы изобретаете свои собственные теги.</b><br>
                        Теги например <b>to</b> и <b>from</b> не определяются никакими стандартами XML.<br>
                        Теги в XML документе "изобретены/придуманы" самим автором этого XML документа.<br>
                        Все потому, что в языке XML нет предопределенных тегов.<br><br>
                        Так, в HTML все используемые теги предопределены. HTML документы могут использовать только те теги, которые определяются в стандартах HTML (
                        /p>, /li> и т. д.).<br>
                        XML позволяет автору определять свои языковые теги и свою структуру документа.
                    </p>
                    <p>
                        <b>XML – это не замена HTML.</b><br>
                        XML – это дополнение HTML.<br>
                        Важно понять, что XML не является заменой HTML.<br>
                        В большинстве веб-приложениях XML используется для транспортировки данных, а HTML для форматирования и отображения данных.<br>
                        XML – это программно- и аппаратно-независимый инструмент для транспортировки информации.
                    </p>
                    <p>
                        <b>XML – везде</b><br>
                        В настоящее время XML также важен для сети, как когда-то был важен HTML для рождения современного Интернета.<br>
                        XML – это общий инструмент передачи данных между всеми видами приложений.
                    </p>
                    <p>
                        <b>XML отделяет данные от HTML</b><br>
                        Если вам в HTML документе необходимо отображать динамические данные, то это будет занимать слишком много времени, если всякий раз, когда эти данные изменились, редактировать сам HTML документ.<br>
                        С XML данные можно хранить в отдельных файлах XML. <br>
                        При этом вы сосредотачиваетесь на использовании HTML/CSS для отображения и шаблонизации и можете быть уверены, что поступающие новые данные не потребуют каких-либо изменений в коде HTML документа.
                    </p>
                </div>
                <div class="rules_xml">
                    <h4 class="subtitle">
                        Правила синтаксиса XML
                    </h4>
                    <p>
                        XML документ должен содержать один элемент, который будет родительским для всех других элементов.<br>
                        Он называется корневым элементом.
                    </p>
                    <p>
                        Пример синтаксиса:
                    </p>
                    <div class="rules_xml_struct">
                        <p>
                            <корневой><br>
                                <потомок><br>
                                    <подпотомок>....../подпотомок><br>
                                        /потомок><br>
                                        /корневой><br>
                        </p>
                    </div>
                    <div class="attn">
                        <p>
                            Следующая строка называется XML прологом:<br><br>
                            <b>?xml version="1.0" encoding="UTF-8"?></b>(в начале тоже угловая скобка)<br><br>
                            XML пролог необязателен.<br>
                            Но если он есть, то это должна быть первая строка XML документа.<br><br>
                            В XML документе могут присутствовать международные символы, вроде русских букв, и чтобы не возникало ошибок необходимо указать кодировку, либо сохранить XML файл в формате UTF-8.<br><br>
                            UTF-8 - кодировка XML документов по умолчанию.
                        </p>
                    </div>
                    <p>
                        XML нельзя опускать закрывающий тег. Абсолютно все элементы должны закрываться.
                    </p>
                    <p>
                        Теги XML являются регистрозависимыми.<br>
                        Так, тег Letter> не то же самое, что тег letter>.<br>
                        Открывающий и закрывающий теги должны определяться в одном регистре.
                    </p>
                    <p>
                        XML элементы должны соблюдать корректную вложенность.
                    </p>
                    <p>
                        Значения XML атрибутов должны заключаться в кавычки.<br>
                        Так же, как и в HTML, у XML элементов могут быть атрибуты в виде пары <span style="font-size: 15px;">имя/значение</span>.<br>
                        В XML значения атрибутов должны заключаться в кавычки.<br>
                        Посмотрите на следующие два примера XML документа.<br>
                        Первый с ошибкой, второй написан правильно.<br>
                    </p>
                    <div class="rules_xml_struct">
                        note date=12/11/2007><br>
                        note date="12/11/2007">
                    </div>
                    <p>
                        Ошибка в первом XML документе заключается в том, что значение атрибута date элемента note> не заключено в кавычки.
                    </p>
                    <p>
                        Некоторые символы в XML имеют особые значения.<br>
                        Если вы поместите, например, символ "<" внутри XML элемента, то будет сгенерирована ошибка, так как парсер интерпретирует его, как начало нового элемента.<br>
                            Так, к ошибке приведет следующая строка XML документа:<br>
                    </p>
                    <div class="rules_xml_struct">
                        message>если жалование < 1000 /message>
                    </div>
                    <p>
                        Чтобы такая ошибка не возникала, нужно заменить символ <b>"<" </b> на его сущность(в xml всего 5 сущностей смотри таблицу в инете).<br>
                                Синтаксис комментариев в XML такой же, как и в HTML.
                    </p>
                </div>
            </div>
            <div class=""></div>
            <div class=""></div>
        </section>
        <section class="main_part">
            <h4 class="subtitle">
                Работа с XML
            </h4>
            <div class="">
                <p>
                    С помощью XML можно парсить данные в свою базу данных.<br>
                    Для использования XML файла в РНР используется библиотека SimpleXML.<br>
                    Расширение SimpleXML предоставляет очень простой и легкий в использовании набор инструментов для преобразования XML в объект, с которым можно затем работать через его свойства и с помощью итераторов.
                </p>
                <p>
                    Чтобы наполнить свою БД из XML информацией/данными(т.е. спарсить), необходимо написать соответсвующий скрипт/код.
                </p>
                <p>
                    Переходим непосредственно к теме урока.
                </p>
                <p>
                    Для наполнения нашей БД из XML, нам необходимо создать папку XML в которой создать файл xml.php, в котором мы и будет писать наш код.
                </p>
                <p>
                    В созданном нами файле (xml.php) создаем переменную $xml и подключаем нашу библиотеку(т.е. файл movie.xml). Подключаем с помощью функции simplexml_load_file().
                </p>
                <div>
                    <p>
                        Эта функция simplexml_load_file() - принимает имя файла и возвращает объект типа SimpleXMLElement. И с этим объектом можно будет работать.<br>
                        В скобках указываем путь к файлу xml.
                    </p>
                </div>
                <p>
                    При подключении данной функции, сразу же запускаем и проверку подключения через функции die, а именно:<br>
                    $xml=simplexml_load_file("xml/movies.xml") or die ("Error: Cannot create object");<br>
                    Таким образом, мы посметили в нашу переменную $xml поместили многомерный массив movie.xml.
                </p>
                <p>
                    После того как мы посметили в нашу переменную $xml многмерный массив movie.xml, мы можем вывести данные массива в браузер, для этого доплняем наш код следующим:<br>
                    prin_r($xml);
                </p>
                <div class="inform">
                    <p>
                        Функция prin_r(); выводит информацию о переменной в удобочитаемом виде.
                    </p>
                </div>
                <p>
                    Чтобы выведенная информация отображалась более красиво и читабельно используем тег pre, а именно:<br>
                    echo "pre>";<br>
                    prin_r($xml);<br>
                    echo "/pre>";<br>
                    Видим полный список массива в документе формата xml.
                </p>
                <p>
                    Однако чтобы узнать сколько в нашем массиве фильмов мы используем функцию count();.
                </p>
                <div class="inform">
                    <p>
                        Функция count(); - подсчитывает количество элементов массива или что-то в объекте.
                    </p>
                </div>
                <p>
                    Пишем следующий код для вывода из массива фильмов, а именно:<br>
                    echo count($xml);
                </p>
                <p>
                    <b>ВАЖНО</b> отметить, что вывод из массива фильмов, лучше сделать до того как будет отображен весь массив.
                </p>
                <div class="code_php">
                    <p>
                        Теперь покажем как наш код должен выглядеть:<br>
                    </p>
                    <div>
                        ?php<br>

                        $xml = simplexml_load_file("movies.xml") or die("Error: Cannot create object");<br>

                        echo count($xml);<br>

                        echo "pre>";<br>
                        print_r($xml);<br>
                        echo "/pre>";<br>
                    </div>
                    <p>
                        При запуске скрипта ы самом верху мы видим количество фильмов - 25, и ниже идет описание к какждому фильму.
                    </p>
                    <p>
                        Вот такой скрип/код нам понадобиться для вывода массива из xml файла.
                    </p>
                </div>
            </div>
        </section>

    </main>

</body>

</html>