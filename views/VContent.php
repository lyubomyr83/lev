<?php
if($content['id']==5)
{
    echo $content['content']."<br>";
    require_once "views/VPifagorForm.php";

    if ($_POST['pifagor']){
        pifagorTable($_POST['rows'],$_POST['cols']);
    }

}
elseif ($content['id']==6)
{
    echo $content['content']."<br>";
    kosti();
}
else
{
    echo $content['content'];
}