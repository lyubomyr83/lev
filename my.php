<?php

$name = "Иван";
$name1 = "Егор";
$age = 11;

echo "Меня зовут ".$name."<br>";
echo "Мне ".$age." лет.<br>";

echo "Моего друга зовут ".$name1."<br>";

if($name == "Лев")
{
    echo "Добро пожаловать ".$name;
}
elseif ($name == "Егор")
{
    echo "Добро пожаловать ".$name;
}
else
{
    echo $name.", мы вас не знаем<br>";
}

$a = 3;
$b = 5;
$c = 2;

$summa = $a + $b + $c;

echo "Сумма чисел а и b и с будет равна ".$summa;