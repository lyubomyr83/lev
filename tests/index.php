<form method="post">
    Число А <input type="text" name="a">
    Число Б <input type="text" name="b">
    <input type="submit" value="Посчитать">
</form>

<?php
$a = $_POST['a'];
$b = $_POST['b'];
$summ = $a+$b;
echo "Сумма чисел ".$a." и ".$b." равна ".$summ. ".";
