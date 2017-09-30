<form method="post">
    Как вас зовут?
    <input type="text" name="imja">
    Сколько вам лет?
    <input type="text" name="age">
    <input type="submit" value="Войти в школу">
</form>

<?php
$name = $_POST['imja'];
$age = $_POST['age'];

if($_POST){
    echo "Меня зовут ".$name." и мне ".$age." лет.";

    if ($name == "Петя" OR $name == "Даниил")
    {
        echo "Привет ".$name." заходи.";
    }
    else
    {
        echo "Уходите, мы вас не знаем";
    }
}