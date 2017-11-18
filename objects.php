<?php
require_once "header.php";
?>
<h2>ООП - объекты</h2>

<?php
require_once "Auto.php";

$levcar = new Auto("Жигули","баклажанового", 50);
$levcar->aboutAuto();

$slavacar = new Auto("Лада","чёрного",10);
echo "<br>";
$slavacar->aboutAuto();

require_once "footer.php";
?>
