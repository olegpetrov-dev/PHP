<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Number форма</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        form {
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background-color: #4caf50;
            color: #fff;
            border: none;
            cursor: pointer;
        }

        h2 {
            margin-top: 20px;
        }

        p {
            margin-bottom: 10px;
        }
    </style>
</head>
<body>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <label for="num1">Число 1:</label>
    <input type="number" name="num1" required>

    <label for="num2">Число 2:</label>
    <input type="number" name="num2" required>
    <br><br>
    <label for="text1">Текст 1:</label>
    <input type="text" name="text1">

    <label for="text2">Текст 2:</label>
    <input type="text" name="text2">

    <label for="text3">Текст 3:</label>
    <input type="text" name="text3">
    <br><br>
    <input type="submit" value="Отправить">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (isset($_POST['num1']) && isset($_POST['num2'])) {
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];

        $sum = $num1 + $num2;
        $difference = $num1 - $num2;
        $product = $num1 * $num2;

        echo "<h2>Результаты арифметических операций:</h2>";
        echo "Сумма: $sum <br>";
        echo "Разность: $difference <br>";
        echo "Произведение: $product <br>";
    }

    if (isset($_POST['text1'])) {
        echo "<h2>Текстовые данные:</h2>";
        echo "Текст 1: " . $_POST['text1'] . "<br>";
    }
    if (isset($_POST['text2'])) {
        echo "Текст 2: " . $_POST['text2'] . "<br>";
    }
    if (isset($_POST['text3'])) {
        echo "Текст 3: " . $_POST['text3'] . "<br>";
    }
}
?>

</body>
</html>