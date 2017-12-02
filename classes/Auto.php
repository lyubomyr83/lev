<?php

class Auto
{
    // свойства
    public $color;
    public $speed;
    public $name;

    // методы
    public function __construct($n,$c,$s)
    {
        $this->name = $n;
        $this->color = $c;
        $this->speed = $s;
    }


    public function aboutAuto()
    {
        echo "Автомобиль ".$this->name." ".$this->color." цвета едет со скоростью ".$this->speed."км/ч.";
    }
}