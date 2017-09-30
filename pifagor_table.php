<?php
require_once "header.php";
?>
<h2>Таблица Пифагора</h2>
<form method="post">
    Строк <input type="text" name="rows">
    Столбцов <input type="text" name="cols">
    <input type="submit" value="Нарисовать таблицу Пифагора">
</form>

<?php

if($_POST){
    $r = $_POST['rows'];
    $c = $_POST['cols'];

    echo "<div id='pifagor'>";
    pifagorTable($r,$c);
    echo "</div>";
}

require_once "footer.php";
?>