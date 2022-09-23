<?php

//Создание архива
// $zip = new zipArchive();
// $zipFile = '14.zip';

// if($zip->open($zipFile, ZipArchive::CREATE) !== true){   //при откр создать зип файл
//     exit('errors');
// }

// $zip->addFile('text.txt'); //в зип создать текст док

// echo $zip->filename; //вывести название
// echo '<br>';
// echo $zip->numFiles; //и кол созданных файлов
// echo '<br>';

// $zip->close();

//===============
//Разархивировать файл

$zip = new ZipArchive();
$zip->open('14.zip');
$zip->extractTo('./unzip');//куда разархив
$zip->close();

echo 'ok';


?>