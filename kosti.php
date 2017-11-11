
<?php
require_once "header.php";
?>
<h2>Игра в кости</h2>
<div class="row">
    <div class="col-md-5 kosti">
        <?php
        kosti();
        ?>
        <br><input type="button" value="Бросить кости" onClick="document.location.reload(true)">
    </div>
    <div class="col-md-7">
    </div>
<?php
require_once "footer.php";
?>
