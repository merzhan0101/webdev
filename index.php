<pre>
<?php
    //Размер файла 
    echo filesize('one.txt');

    //создаем файл
    $fp = fopen('data.txt', 'w');
    $a = fwrite($fp, date('Y m d H:i:s', time()));
    var_dump($a);
    // fwrite($fp, 'salem alem'); 
    // fwrite($fp, '23');
    fclose($fp);

    //читать файлы
    $filename = "data.txt";
    $handle = fopen($filename, "r");//GOOGLE
    $contents = fread($handle, filesize($filename));
    fclose($handle);
    echo '<br>';
    var_dump($contents);

    //получить содержимое папки
    echo '<br>';
    echo '==========<br>';
    if ($handle = opendir('./')) {
        while (false !== ($entry = readdir($handle))) {
            if ($entry != "." && $entry != "..") {
                echo "$entry\n";
                echo filesize('./'.$entry);
                echo '<br>';
            }
        }
        closedir($handle);
    }
?>