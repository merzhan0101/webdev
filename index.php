<?php 

$imagePath = __DIR__.'./assets/img/Background4.png';//путь к картинке
$fontPath = __DIR__.'./NotoSerifGeorgian-VariableFont_wdth,wght.ttf'; //путь в шрифтам

$image = imagecreatefrompng($imagePath);

//цвет текста
$color = imagecolorallocate($image, 0, 0, 0);
$text = 'Merzhan Kuralay';

//прописать текст на картинке
imagettftext($image, 50, 0, 950, 250, $color, $fontPath, $text);

$text = '8-777-777-77-77';
imagettftext($image, 50, 0, 980, 350, $color, $fontPath, $text);

$torayghir = imagecreatefrompng('assets/img/toraigyrov5.png');
imagecopy($image, $torayghir, 20, 250, 50, 80, 532, 812);


//записать в файл 
imagepng($image, __DIR__.'./result.png');
//удалить image
imagedestroy($image);
imagedestroy($torayghir);

echo '<img src="./result.png">';
?>