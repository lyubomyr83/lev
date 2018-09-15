<?php
echo $content['content']."<br>";

switch ($content['type'])
{
    case 'pifagor':
        require_once "views/VPifagorForm.php";

        if ($_POST['pifagor']){
            pifagorTable($_POST['rows'],$_POST['cols']);
        }
        break;
    case 'proverka':
        proverka(5);
        break;
    case 'kosti':
        kosti();
        break;
}


if ($content['gallery'])
{


    $pictures = $getgallery->receiveGallery($content['gallery _id']);

    $col = count($pictures);

    if ($col<3)
    {
        $col = 3;
    }
    $rows = $col/3;
    echo $rows;

    foreach ($pictures as $picture)
    {
        
        $img[]=$picture;
    }

    $count_pictures = count($img);

    for ($i =0; $i<$count_pictures;$i++)
    {
        if($i%3 == 0)
        {
            echo "<div class=\"row\">";
        }

        echo "<div class=\"col-md-4\"><img src=\"img/gallerys/{$img[$i]}\" width=\"150px\"></div>";

        if($i%3 == 0)
        {
            echo "</div>";
        }

    }


}


if($_GET['gallery'])
{
    $one = $getgallery->receiveGallery($_GET['gallery']);

    foreach ($one as $value)
    {
        echo "<img src=\"img/gallerys/{$value}\" width=\"500px\">";
    }
}