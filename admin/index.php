<?php
require_once "config/ini.php";


require_once "header.php";
if(!$_SESSION['loged'])
{
    require_once "views/Vlogin.php";
}
else
{
    echo "<a href='?logout=1'>Выйти</a>";
}

if($_POST)
{
    if ($_POST['autorisation'])
    {
        $isloged = new \app\classes\Clogin();
        $isloged->getAutorisation($_POST['login'],$_POST['pass']);
    }

}

if($_GET['logout'])
{
    unset($_SESSION['loged']);
    header("index.php");
}

require_once "footer.php";