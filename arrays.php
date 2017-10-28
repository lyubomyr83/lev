<?php
require_once "header.php";
?>
<h2>Массивы</h2>
<?php
$Autos['Audi']['Скорость']=180;
$Autos['Audi']['Цвет']='Красный';
$Autos['Audi']['Кузов']='Седан';
$Autos['Ford']['Скорость']=200;
$Autos['Ford']['Цвет']='Зелёный';
$Autos['Ford']['Кузов']='Кабриолет';

echo 'Цвет Audi '.$Autos['Audi']['Цвет'];
echo "<br>";
echo $Autos['Ford']['Кузов'];