<?php
//https://www.youtube.com/watch?v=gxzl19W2MUE&list=PLM7wFzahDYnFbCIkW-tLHsEuwUk_z1n8P&index=16

$n = 5; // 0 1 2 3 4 5 
$out = '';
t1();
    echo '<br>';
    echo $out;
    echo '<br>';
    $n = 3;
    t1();//запуск функ


function t1(){
    global $n, $out;
    $out = '';//очстка рез-а
    for($i = 0; $i <= $n; $i++){
        $out = $out. $i.' ';
    }
    echo $out;//должно вне цикла

}


?>