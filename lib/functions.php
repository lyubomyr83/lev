<?php

// припев
function pripev ()
{
    echo "<br>припева нет, припева нет,<br>Припева нет, припева нет.<br>";
}

// сложение двух чисел
function sum ($x,$y)
{
    $summa = $x+$y;
    echo "Разность чисел ".$x." и ".$y." равна ".$summa;
}

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
    echo "<br>Вам выпало ".$summa;
}