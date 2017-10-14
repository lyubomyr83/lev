
<?php
require_once "header.php";
?>
<h2>Игра в кости</h2>

<?php
kosti();
echo "<br><input type=\"button\" value=\"Бросить кости\" onClick=\"document.location.reload(true)\">";
require_once "footer.php";
?>
