<?php
    //Ex 13, 14
    $a = 0;
    $b = 0;
    for( $i=0; $i<=3; $i++ ) {
        echo "значение a на " . $i + 1 . " шаге: ";
        echo $a += 7;
        echo "<br>";
        echo "значение b на " . $i + 1 . " шаге: ";
        echo $b += 1;
        echo "<br><br>";
    }
    echo "Конец цикла, и значение a = " . $a . ", а значение b = " . $b;
    echo "<br>";
?>

<?php
    //Ex 15
    $i = 0;
    $num = 70;
    while( $i < 15)
    {
    $num--;
    $i++;
    }
    echo ("<br />Цикл завершен на i = $i шаге и num = $num" ); 
    echo "<br><br>";
?>

<?php
    //Ex 16, 17
    $adaos = 5;
    $pret = 150;
    do {
        echo "pret nou: " . $pret=$pret + $adaos;
        echo "<br>";
        $adaos++;
    }
    while( $adaos < 15 );
    echo ("<br />Новая цена товара будет -- $pret" );
?>

<?php
    //Ex 18
    echo "<p><b>For</b></p>";
    echo "<p><ul>
    <li>предоставляет удобный способ выполнять повторяющиеся действия с заранее известным числом итераций</li>
    <li>имеет три основные части: инициализация переменной, условие продолжения итераций, и выражение изменения переменной</li>
    </ul></p>";

    echo "<p><b>While</b></p>";
    echo "<p><ul>
    <li>выполняет блок кода, пока условие истинно</li>
    <li>условие проверяется перед каждой итерацией, и если оно ложно изначально, то код внутри цикла не выполнится ни разу</li>
    </ul></p>";

    echo "<p><b>Do While</b></p>";
    echo "<p><ul>
    <li>очень похож на 'WHILE', но он гарантирует, что блок кода выполнится как минимум один раз, даже если условие ложно изначально</li>
    <li>условие проверяется после каждой итерации</li>
    </ul></p>";
?>
