<?php
require_once "config/ini.php";


require_once "header.php";
if(!$_POST)
{
    require_once "views/Vlogin.php";
}
else
{
    if ($_POST['autorisation'])
    {
        $isloged = new \app\classes\Clogin();
        $isloged->getAutorisation($_POST['login'],$_POST['pass']);
    }
}

require_once "footer.php";