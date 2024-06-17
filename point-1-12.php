<?php
    //Ex 2
    echo "PHP появился в 1995 году! - by echo";
    echo "<br>";
    print "PHP появился в 1995 году! - by print";
    echo "<br><br>";

    //Ex 4
    $birthYear = 2001;
    $birthYearString = "Год моего рождения";

    //Ex 5
    echo $birthYear;
    echo "<br>";
    echo $birthYearString;
    echo "<br><br>";

    //Ex 6
    print $birthYearString . " " . $birthYear . " г.";
    echo "<br><br>";

    //Ex 7
    $birthDay = 25;
    $birthMonth = 11;
    echo $birthDay + $birthMonth . " - вывод суммы значений переменных";
    echo "<br>";
    echo "$birthDay + $birthMonth" . " - вывод значений переменных";;
    echo "<br>";
    echo '$birthDay + $birthMonth' . " - вывод как простой текст";;
    echo "<br><br>";

    //Ex 8
    echo 'В языке программирования “PHP” переменная не может начинаться на цифру';
    echo "<br><br>";
?>


<?php
    //Ex 9, 10
    $nume = 'Петров'; // переменная фамилии студента
    $prenume = 'Олег'; // переменная имени студента
    echo 'Фамилия студента '.$nume. ', а его имя ' .$prenume . '.'; // вывод информации о студенте
    $varsta = 22; // переменная возраста студента
    print '<br />Возраст студента ' .$varsta .'.'; // вывод возраста студента
    echo "<br>";
?>

<?php
    //Ex 11
    //if...else
    $d=date("D");
    if ($d=="Fri")
        echo "<br />Хороших вам выходных! $prenume ";
    elseif ($d=="Sun")
        echo "<br />Завтра начинается новая рабочая неделя! $prenume "; 
    else
        echo "<br />Приятного вам рабочего дня! $prenume ";

    //тернарный оператор
    echo "<br><br>Тернарный оператор:";
    // тернарный оператор делает тоже самое, что и конструкция if...else
    // если выражение дает true, выполняется код после символа '?',
    // если выражение дает false, выполняется код после символа ':'
    echo($d=="Fri") ? "<br />Хороших вам выходных! $prenume" : "<br />Приятного вам рабочего дня! $prenume";
    echo "<br><br>";

    //Ex 12
    //$weekDay = date("D");
    switch ($d) {
        case 'Mon':
            echo "Сегодня, понедельник, " . date("d.m.y");
            break;
        case 'Tue':
            echo "Сегодня, вторник, " . date("d.m.y");
            break;
        case 'Wed':
            echo "Сегодня, среда, " . date("d.m.y");
            break;
        case 'Thu':
            echo "Сегодня, четверг, " . date("d.m.y");
            break;
        case 'Fri':
            echo "Сегодня, пятница, " . date("d.m.y");
            break;
        case 'Sat':
            echo "Сегодня, суббота, " . date("d.m.y");
            break;
        case 'Sun':
            echo "Сегодня, воскресенье, " . date("d.m.y");
            break;
    }
    echo "<br><br>";
?>