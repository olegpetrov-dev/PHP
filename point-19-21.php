<!DOCTYPE html>
<html>
<head>
<meta charset=utf-8 />
<title>Документ без названия</title>
</head>
<body>
<?php
    //Ex 19, 20
    $noteInfo = array(
    array (1, "Иванов", "Иван", 8),
    array (2, "Ковалев", "Елина", 10),
    array (3, "Кушнир", "Татьяна", 10),
    array (4, "Гурэу", "Ана", 7),
    array (5, "Дедин", "Кэтэлин", 8),
    array (6, "Китороагэ", "Антонина", 8),
    array (7, "Жосан", "Сергей", 7),
    array (8, "Петров", "Олег", 5),
    array (9, "Князь", "Владимир", 5)
    );
?>
<table border = "1">
<tr style = "background-color: green; color: white">
<th colspan = "4">Оценки учеников 12-го класса, по информатике</th>
</tr>
<tr style = "background-color: green; color: white">
<th>П.н.</th>
<th>Фамилия</th>
<th>Имя</th>
<th>Оценка</th>
</tr>
<?php
    for ($linie = 0; $linie < count($noteInfo); $linie++) {
    echo "<tr>";
    for ($coloana = 0; $coloana <= 3; $coloana++) {
    echo "<td>" . $noteInfo[$linie][$coloana] . "</td>";
    }
    echo "</tr>";
    }
?></table>
<?php
    //Ex 21
    function avgStudentsMarks($studentsArray) {
        $sum = 0;
        $count = count($studentsArray);
    
        foreach ($studentsArray as $student) {
            $sum += $student[count($student) - 1];
        }

        $avg = $sum / $count;
        echo "Средняя оценка по информатике: " . $avg;
    }
    avgStudentsMarks($noteInfo);

    // $sum - сумма оценок, $count - количество учеников
    // Цикл foreach для прохода по каждому студенту в двумерном массиве
    // Для каждого студента добавляется оценка по информатике к общей сумме. Оценка находится в последнем элементе подмассива
    // После цикла вычисляется средняя оценка, делением суммы на количество учеников
?>

</body></html>