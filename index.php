<?php 

    function sum($a, $b, $s = '+'){
        if($s == '*'){
            echo $a * $b;
        }
        elseif($s == '+'){
            echo $a + $b;
        }
        elseif($s == '-'){
            echo $a - $b;
        }
        elseif($s == '/'){
            echo $a / $b;
        }
    }

    sum(99, 2, '*');

    function sum2($a, $b, $s){
        if($s == '*'){
            return $a * $b;
        }
        elseif($s == '+'){
            return $a + $b;
        }
        elseif($s == '-'){
            return $a - $b;
        }
        elseif($s == '/'){
            return $a / $b;
        }
        
        //return $a + $b;//после ретурн игнорируется
    }

    echo '<br>';
    $c = 100 + sum2(99, 1, '-');
    echo $c;
    echo '<hr>';
    echo sum2(100, 5, '+');

?>