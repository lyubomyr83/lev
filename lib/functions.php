<?php

// таблица Пифагора
function pifagorTable($r,$c)
{

    $rows = $r;
    $cols = $c;

    echo "<br><br><table>";

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

// проверка числа

function proverka($chislo)
{
    if($chislo<100){
        echo $chislo . " меньше 100";
    }
    elseif($chislo == 100)
    {
        echo $chislo." равно 100";
    }elseif($chislo>100)
    {
        echo $chislo." больше 100";
    }

}