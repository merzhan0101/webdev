<?php 
echo '<pre>';
//read json file
$res = file_get_contents('s.json');//путь к файлу
print_r($res);
echo "<br>";
echo "<hr>";
$data = json_decode($res, true);//из строк в массивы
//var_dump($data);

for($i = 0; $i < count($data); $i++){
    $data[$i]['age'] = $data[$i]['age'] + 10; //изменить возраст
}

print_r($data);

//write json(обратно)
$jsonData = json_encode($data);
file_put_contents('t.json', $jsonData); //создается файл с изменениями


?>