<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet" />
</head>

<body>
<?php

// автозагрузка классов
function __autoload($name)
{
    require_once('classes/' . $name . '.php');
}

// подключим библиотеку с функциями
require_once "lib/functions.php";

// подключаемся к Базе данных
$connect_to_db = new Db();

?>
<div class="row logo">
    <div class="col-md-2"><img src="img/logo.png"></div>
    <div class="col-md-9"><h1>LEV PROJECT</h1></div>
</div>
<div class="row">
    <div class="col-md-12"></div>
</div>
<div class="row">
    <div class="col-md-2 menu">
        <?php
        // подключим меню
        require_once "menu.php";
        ?>
    </div>
    <div class="col-md-9">

