<?php
require_once "header.php";
?>
<div class="row">
    <div class="col-md-2">
        <form method="post">
            <div class="form-group">
                <label for="tr">Строк</label>
                <input type="text" class="form-control" id="tr" placeholder="Введите количество строк" name="rows">
            </div>
            <div class="form-group">
                <label for="td">Столбцов</label>
                <input type="text" class="form-control" id="td" placeholder="Введите количество столбцов" name="cols">
            </div>
            <button type="submit" class="btn btn-default">Нарисовать таблицу</button>
        </form>
    </div>
    <div class="col-md-10">
        <h2>Таблица Пифагора</h2>


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

    </div>
</div>
