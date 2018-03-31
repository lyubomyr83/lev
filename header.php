<!DOCTYPE html>
<html lang="ru">

<head>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
    <link href="style/style.css" rel="stylesheet" />
    <title><?=$content['title']?></title>
</head>

<body>

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

        // сформируем меню
        $menu = $sidemenu->Menu();

        require_once "views/VMenu.php";
        ?>
    </div>
    <div class="col-md-9">
        <?php
require_once "views/VContent.php";

