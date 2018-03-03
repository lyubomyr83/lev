<?php

class Truck extends Auto
{
    public $cargo;
    public static $model = "Грузовик";

    public function __construct($n, $c, $s, $g)
    {
        $this->cargo = $g;
        parent::__construct($n, $c, $s);
        echo "Грузоподъемность: ".$this->cargo." тонн.";
    }

}