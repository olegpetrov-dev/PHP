<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Форма с проверкой</title>
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
            width: 300px;
        }

        label {
            display: block;
            margin-bottom: 10px;
        }

        input, textarea {
            width: 100%;
            padding: 10px;
            margin-bottom: 5px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            background: linear-gradient(to bottom, #b30000, #660000);
            color: #fff;
            border: none;
            cursor: pointer;
            padding: 12px;
            border-radius: 5px;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.3);
            transition: background 0.3s ease;
        }

        input[type="submit"]:hover {
            background: linear-gradient(to bottom, #660000, #b30000);
        }

        span {
            color: red;
            font-size: 12px;
            margin-left: 5px;
        }

        h2 {
            margin-top: 20px;
        }
    </style>
</head>
<body>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
    <span id="error-nume"></span>    
    <label for="nume">Nume *</label>
    <input type="text" name="nume">

    <span id="error-email"></span>
    <label for="email">Email *</label>
    <input type="email" name="email">
    
    <span id="error-subiect"></span>
    <label for="subiect">Subiect *</label>
    <input type="text" name="subiect">

    <span id="error-mesaj"></span>
    <label for="mesaj">Mesaj *</label>
    <textarea name="mesaj" rows="4"></textarea>

    <input type="submit" value="Trimite email">
</form>

<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nume = $_POST['nume'];
    $email = $_POST['email'];
    $subiect = $_POST['subiect'];
    $mesaj = $_POST['mesaj'];

    $fields = array('nume', 'email', 'subiect', 'mesaj');
    $error = false;

    foreach ($fields as $field) {
        if (empty($_POST[$field])) {
            echo "<script>document.getElementById('error-$field').innerText = 'Это поле обязательно для заполнения';</script>";
            $error = true;
        }
    }

    if (!$error) {
        echo "<h2>Данные формы:</h2>";
        echo "<p><strong>Nume:</strong> $nume</p>";
        echo "<p><strong>Email:</strong> $email</p>";
        echo "<p><strong>Subiect:</strong> $subiect</p>";
        echo "<p><strong>Mesaj:</strong> $mesaj</p>";
    }
}
?>

</body>
</html>