<?php
// автозагрузка классов
function __autoload($name)
{
    // конвертируем полный путь в пространстве имён с \ в /
    $name = str_replace('\\', '/', $name);
    //echo "<br>".$name;
    require_once($name.'.php');

}

// подключаем библиотеку пользовательских функций
require_once "lib/functions.php";

// создадим объекты
$sidemenu = new \app\classes\CMenu(); // для работы с меню
$getcontent = new app\classes\CContent(); // для работы с контентом страниц


// получим массив с контентом
$content = $getcontent->Content($_GET['page']);