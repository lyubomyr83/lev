<?php
if ($_GET)
{
    if($_GET['page'] == "autorisation")
    {
        require_once "views/login_form.php";
    }
}

if ($_POST)
{
    if($_GET['page'] == "autorisation")
    {
        //вызываем функцию Авторизации
        autorisation($_POST['login'],$_POST['pass'],$users);
    }

}