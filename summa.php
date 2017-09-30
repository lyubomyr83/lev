<?php
require_once "header.php";
?>
    <h2>Вычисление суммы чисел</h2>
<form method="post">
    Число 1 <input type="text" name="chislo1">
    Число 2 <input type="text" name="chislo2">
    <input type="submit" value="Рассчитать">
</form>
<br>
<?php

if (!$_POST['chislo1'] AND !$_POST['chislo2']){

    die();
}
$x = $_POST['chislo1'];
$y = $_POST['chislo2'];

sum($x,$y);

require_once "footer.php";
?>