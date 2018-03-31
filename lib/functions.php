<?php
function pifagorTable($r,$c)
{

    $rows = $r;
    $cols = $c;

    echo "<table>";

    for ($i = 1; $i <= $rows; $i++) {
        echo "<tr>\n";
        if ($i == 1) {
            for ($j = 1; $j <= $cols; $j++) {
                if($j!=1){
                    echo "<td class='stroka'>" . $j . "</td>\n";
                }
                else{
                    echo "<td></td>\n";
                }

            }
        } else {
            for ($j = 1; $j <= $cols; $j++) {
                if($j!=1){
                    echo "<td>" . $j * $i . "</td>\n";
                }
                else{
                    echo "<td class='stroka'>" . $j * $i . "</td>\n";
                }
            }
        }

        echo "</tr>\n";
    }
    echo "</table>";
}

// игра в Кости

function kosti()
{

    $chislo1 = rand(1,6);
    $chislo2 = rand(1,6);

    $summa = $chislo1 + $chislo2;

    echo "<img src=\"img/ris".$chislo1.".gif\">";
    echo "<img src=\"img/ris".$chislo2.".gif\">";
    echo "<div class=\"kosti_header\">Вам выпало ".$summa."</div>";
}

// авторизация

function autorisation($l,$p)
{
    $valid_users[] = array("login"=>"admin","password"=>"A123");
    $valid_users[] = array("login"=>"root","password"=>123);

    foreach ($valid_users as $value)
    {
        if($l == $value['login'] && $p == $value['password'])
        {
            echo "<h3><span class=\"label label-success\">Добро пожаловать, ".$l."</span></h3>";
            $autorisationok = TRUE;
        }
    }

    if($_POST && !$autorisationok)
    {
        echo "<h3><span class=\"label label-danger\">Ошибка авторизации</span></h3>";
    }
}