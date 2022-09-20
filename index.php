<?php 

    for($i = 0; $i < 10; $i += 1){
        echo $i.' ';
    }

    echo "<hr>";

    $i = 0;
    while($i < 10){
        $i += 1;
        echo $i.' ';
    }
    echo "<br>";

    //Summ
    $sum = 0;
    for($i = 0; $i < 11; $i += 1){
        $sum += $i;
    }
    echo $sum;
    echo "<br>";

    $sum = 0;
    $i = 0;
    while($i < 11){
        $sum += $i;
        $i += 1;
    }

    echo $sum;

    echo "<br>";
    //Произведение
    $multi = 1;
    for($i = 1; $i < 11; $i += 1){
        $multi *= $i;
    }

    echo $multi;


    echo "<br>";
    //Произведение
    $multi = 1;
    $i = 1;
    while($i < 11){
        $multi *= $i;
        $i += 1;
    }

    echo $multi;

?>