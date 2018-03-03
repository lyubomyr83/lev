<?php


class Boat
{
    public $length;
    public $seats;
    public $color;
    public $name;

    public function __construct($l,$s,$c,$n)
    {
        $this->length = $l;
        $this->seats = $s;
        $this->color = $c;
        $this->name = $n;

        $this->koroleva();
    }

    public function koroleva()
    {
        echo "<br><br>Название лодки - ".$this->name."<br>";
        echo "цвет - ".$this->color."<br>";
        echo "длина - ".$this->length."<br>";
        echo "мест - ".$this->seats."<br>";
    }



}