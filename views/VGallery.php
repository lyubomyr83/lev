<?php
$all = $getgallery->receiveAllGallerys();

foreach ($all as $k=>$v)
{
    echo "<a href=?gallery={$k}>{$v}</a>";
}
