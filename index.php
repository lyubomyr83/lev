<?php

require_once "header.php";
echo "Главная страница";

$mycarL = new Auto("BMW", "Чёрный", 200);

$mytruck = new Truck("MAN", "Синий", 100, 5);

$mytruck = new Bus("Scania", "Синий", 120, 65);
require_once "footer.php";

$house1 = new House();
$house2 = new House();
$house3 = new House();
$housefriend = new House();

echo "Построено домов ".House::$col;



