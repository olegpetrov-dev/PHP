<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма и результат</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        .stilDiv {
            width: 50%;
            margin: auto;
            padding: 20px;
            border: 1px solid #ccc;
            background-color: #f5f5f5;
            margin-top: 20px;
        }

        .rezultat {
            margin-top: 20px;
            padding: 10px;
            border: 1px solid #ddd;
            background-color: #eaeaea;
        }

        form {
            margin-top: 20px;
        }

        label {
            display: block;
            margin-bottom: 5px;
        }

        input[type="text"],
        textarea {
            width: 100%;
            padding: 8px;
            margin-bottom: 10px;
            box-sizing: border-box;
        }

        input[type="radio"] {
            margin-right: 5px;
        }

        input[type="submit"],
        input[type="reset"] {
            padding: 10px;
            background-color: #4caf50;
            color: #fff;
            border: none;
            cursor: pointer;
        }
    </style>
</head>
<body>

<div class="stilDiv">
    <form action="Ex 23 formular.php" method="post">
        <fieldset>
            <legend>Ваше мнение очень важно для нас!</legend>
            <p>
                <label for="nume">Введите фамилию:</label>
                <input type="text" name="nume" />
            </p>
            <p>
                <label for="prenume">Введите имя:</label>
                <input type="text" name="prenume" />
            </p>
            <p>
                <label for="email">Ваш e-mail:</label>
                <input type="text" name="email" />
            </p>
            <p>Удовлетворены нашими товарами? <br />
                <input type="radio" name="optiune" value="Da" checked="checked" />Хорошие <br />
                <input type="radio" name="optiune" value="Nu" />Нехорошие<br />
                <input type="radio" name="optiune" value="Nu stiu" />Не могу высказаться
            </p>
            <p>
                Оставьте ваше мнение насчет качества услуг предоставленных сотрудниками нашей
                компании:<br />
                <textarea name="comentariu" rows="10" cols="30"></textarea>
            </p>
            <p>
                <input type="reset" value="Удалить">
                <input type="submit" value="Передать">
            </p>
        </fieldset>
    </form>
</div>

<div class="rezultat">
    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        if (isset($_POST['nume'])) {
            echo 'Ваша фамилия: <b>' . $_POST['nume'] . '</b>, ';
        }
        if (isset($_POST['prenume'])) {
            echo 'а ваше имя: <b>' . $_POST['prenume'] . '</b><br />';
        }
        if (isset($_POST['email'])) {
            echo 'Ваш е-майл адрес: <b>' . $_POST['email'] . '</b><br /><br />';
        }
        if (isset($_POST['optiune'])) {
            echo 'На вопрос "Нравятся ли вам наши товары", вы ответили: <b>' . $_POST['optiune'] . '</b>, ';
        }
        if (isset($_POST['comentariu'])) {
            echo 'а ваш комментарий: <br /><i>' . $_POST['comentariu'] . '</i>';
        }
    }
    ?>
</div>

</body>
</html>