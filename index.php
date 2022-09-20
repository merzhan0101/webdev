<pre>
<?php
$m = [99, 88, 177, 66, 55];
var_dump($m);
echo '<br>';

//IN ARRAY - Проверяет, присутствует ли в массиве значение
var_dump(in_array('88', $m));
if(in_array(556, $m)){
    echo 1;
}
else{
    echo 0;
}

//MAX
echo '<br>max<br>';
echo(max($m));

//SORT
echo '<br>';
echo '<br>sort<br>';
$m2 = [3,4,2,1,4,5,1,2];
sort($m2);
print_r($m2);

//REVERSE - Возвращает массив с элементами в обратном порядке
echo '<br>';
echo '<br>reverse<br>';
$m3 = ['a', 'b', 'c', 'd'];
$b = array_reverse($m3);
print_r($b);

//PUSH - Добавляет один или несколько элементов в конец массива
echo '<br>';
echo '<br>push<br>';
$m4 = ['a', 'b', 'c', 'd'];
$m4[]= 'salem';
array_push($m4, 7);
print_r($m4);

//SHIFT - Извлекает первый элемент массива
echo '<br>';
echo '<br>shift<br>';
array_shift($m4);
print_r($m4);

//POP - Извлекает последний элемент массива
echo '<br>';
echo '<br>POP<br>';
array_pop($m4);
print_r($m4);

?>