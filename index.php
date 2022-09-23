<?php 
//https://www.epochconverter.com/

//timestamp
//получать вр в UNIX системе
$t = time();
echo date('Y-m-d H:i A', $t);//формат вр смотреть в документации
echo "<br>";
echo $t;
//перекл тайм зону
echo "<br>", "<hr>";
//date_default_timezone_set('America/Los_Angeles');
// $t = time();
// echo date('Y-m-d H:i A', $t);//формат вр смотреть в документации
// echo "<br>";
// echo $t, "<br>";
//обратно, timestamp=>UNIX time
$s = "9 September 2001 21:00";//timestamp, по мосс вр
echo strtotime($s), "<br>";//unix


?>