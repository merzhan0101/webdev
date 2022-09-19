<?php 
//работа с API
//https://api.openweathermap.org/data/2.5/weather?q=London&appid=89fc1746b0e8e2e4c6e3031c4cb1188f

$url = 'http://api.openweathermap.org/data/2.5/weather';

$options = array(
    'q' => 'Pavlodar',
    'APPID' => '89fc1746b0e8e2e4c6e3031c4cb1188f',
    'units' => 'metric',
    'lang' => 'en',
);

//генерация запроса сервера php
$ch = curl_init();//инициализация модуля
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);//сконфиругация(GOOGLE)
curl_setopt($ch, CURLOPT_URL, $url.'?'.http_build_query($options));//настройка url(GOOGLE)

//вып модуль
$response = curl_exec($ch);
$data = json_decode($response, true);//преобр в массив
curl_close($ch);

//результат вывести на стр
echo '<pre>';
print_r($data);
?>