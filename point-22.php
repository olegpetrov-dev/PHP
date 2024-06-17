<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Галерея изображений</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #f4f4f4;
        }

        header {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
        }

        nav {
            background-color: #444;
            color: #fff;
            text-align: center;
            padding: 0.5em;
        }

        nav a {
            color: #fff;
            text-decoration: none;
            margin: 0 1em;
        }

        section {
            padding: 2em;
        }

        img {
            max-width: 150px;
            height: auto;
            margin-bottom: 10px;
            border: 2px solid #ccc;
            padding: 10px;
        }

        footer {
            background-color: #333;
            color: #fff;
            text-align: center;
            padding: 1em;
            position: fixed;
            bottom: 0;
            width: 100%;
        }
    </style>
</head>
<body>

    <section>
    <?php
    // задаем путь до сканируемой папки с изображениями
    $dir = 'img/';
    // Cканируем содержимое директории
    $files = scandir($dir);
    /*scandir — Получает список файлов и каталогов, расположенных по указанному пути.
    Возвращает array, содержащий имена файлов и каталогов, расположенных по пути, переданном в
    параметре */
    // если нет ошибок при сканировании
    if ($files !== false) {
    // Перебираем все файлы
        for ($i = 0; $i < count($files); $i++) {
        // Текущий каталог и родительский пропускаем
            if (($files[$i] != ".") && ($files[$i] != "..")) {
                // Получаем путь к картинке
                $path = $dir.$files[$i];
                echo "<a href='$path'><img src='$path' alt='Imagine' /></a>";
            }
        }
    }
    ?>
    </section>

</body>
</html>