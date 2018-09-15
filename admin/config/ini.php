<?php
session_start(); 
// автозагрузка классов
function __autoload($name)
{
    // конвертируем полный путь в пространстве имён с \ в /
    $name = str_replace('\\', '/', $name);
    //echo "<br>".$name;
    require_once($name.'.php');

}

// подключаем библиотеку пользовательских функций
require_once "../lib/functions.php";

// создадим объекты