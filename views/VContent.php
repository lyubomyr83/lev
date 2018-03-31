<?php
if($content['id']==5)
{
    echo $content['content']."<br>";
    pifagorTable(9,9);
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