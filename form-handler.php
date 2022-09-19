<?php 
    //http://webdev/get_post_php/form-handler.php?user=Pupkin
    //http://webdev/get_post_php/form-handler.php?user=Pupkin&pass=qwerty777
    
    var_dump($_GET);//стандратный метод для вызова страниц
    //получ GET парам
    $a = $_GET['pass'];
    $b = 'user';
    $c = $_GET[$b];
    // echo $a;
    echo '<br>';
    // echo $c;
    var_dump( isset($_GET['pass']));//проверка есть ли внутри массива
    echo '<br>';
    var_dump(trim($_GET['pass']) !== '');//проверка на пустую строку

    //проверка пароля(пустая, др)
    if(isset($_GET['pass']) AND trim($_GET['pass']) !== ''){
        $b = trim($_GET['pass']);
        echo $b;
    }
    
    echo '<br>';
    //http://webdev/get_post_php/form-handler.php
    var_dump($_POST);
    echo '<br>';
    echo $_POST['user'];
?>