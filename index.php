<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Файловый менеджер</title>
    <link rel="shortcut icon" href="./favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/style.css">
</head>
<body>
    <div class="container">
        <div class="site-header"></div>
        <h1>Список папок</h1>
            <ul>
            <?php 
                $folder = 't1';
                // Открыть известный каталог и начать считывать его содержимое
                if (is_dir($folder)) {
                    //dh - дескриптор, код для обращения
                    if ($dh = opendir($folder)) {
                        while (($file = readdir($dh)) !== false) {
                            if($file != "." && $file != "..")
                                if(is_dir($folder.'/'.$file)){//опр тип док
                                    echo "<li><img src='assets/img/folder.png' class='folder'> ". $file ."</li>";
                                }
                                else{
                                    echo "<li><img src='assets/img/file1.png' class='folder'> ". $file ." ". filesize($folder.'/'.$file) ."</li>";
                                }
                        }
                        closedir($dh);
                    }
                }
            ?>
            </ul>


        <br>
        <footer>
            <div class="block-25">
                <a href="https://itgid.info/course/javascript-2">
                    <div class="block-hover">
                        <img src="https://is-systems.org/shared/lib_imgs/mod_newsblock/news_article/4ef521ada71e9353dd89614050a473a8248ee38f0b13a698a2a5c0c78cd0bcc4.png" alt="">
                        <h3>JavaScript 2.0</a></h3>
                    </div>
                </a>
                <a href="https://itgid.info/course/javascript-2">
                    <div class="block-hover">
                        <img src="https://buddy.works/guides/covers/deploy-to-heroku/heroku-share.png" alt="">
                        <h3>HTML для JS разработчиков</a></h3>
                    </div>
                </a>
                <a href="https://itgid.info/course/javascript-2">
                    <div class="block-hover">
                        <img src="https://miro.medium.com/max/1400/0*HazqjTQaR6swi4Cs" alt="">
                        <h3>Объектно Ориентированный JavaScript</a></h3>
                    </div>
                </a>
            </div>
        </footer>
    </div>


<script src="assets/js/main.js"></script>    
</body>
</html>