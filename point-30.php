<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тест</title>
</head>
<body>

<form action="<?php echo $_SERVER["PHP_SELF"]; ?>" method="post">
    <label for="name">Имя пользователя:</label>
    <input type="text" name="name" required>

    <h2>Тест:</h2>

    <label for="question1">1. Сколько будет 2+2?</label> <br>
    <input type="radio" name="question1" value="a" required>4<br>
    <input type="radio" name="question1" value="b">5<br>
    <input type="radio" name="question1" value="c">Не знаю<br>
    <br>
    <label for="question2">2. Что из этого помогает в установке PHP?</label><br>
    <input type="checkbox" name="question2[]" value="a">OpenServer<br>
    <input type="checkbox" name="question2[]" value="b">Minecraft<br>
    <input type="checkbox" name="question2[]" value="c">XAMPP<br>
    <br>
    <label for="question3">3. Какой оператор используется для проверки идентичности типов в PHP?</label><br>
    <input type="radio" name="question3" value="a" required>==<br>
    <input type="radio" name="question3" value="b">===<br>
    <input type="radio" name="question3" value="c">!=<br>
    <br>
    <input type="submit" value="Отправить">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];

    $questions = array(
        'question1' => $_POST['question1'] ?? '',
        'question2' => implode(', ', $_POST['question2'] ?? array()),
        'question3' => $_POST['question3'] ?? ''
    );

    $correctAnswers = array(
        'question1' => 'a',
        'question2' => implode(', ', array('a', 'c') ?? array()),
        'question3' => 'b'
    );

    $errors = array();

    $differences = array_diff_assoc($questions, $correctAnswers);

    echo "<h2>Результаты теста:</h2>";
    if (empty($differences)) {
        echo "Все ответы правильные!";
    } else {
        echo "В ответах есть ошибки!<br>";
        foreach ($differences as $questionNumber => $wrongAnswer) {
            echo "Ошибка в ответе на вопрос $questionNumber<br>";
        }
    }
}
?>

</body>
</html>