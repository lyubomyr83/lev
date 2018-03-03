<?php

class Bus extends Auto
{
  public $seats;
    public static $model = "Автобус";

  public function __construct($n, $c, $s, $st)
  {
      $this->seats = $st;
      parent::__construct($n, $c, $s);
      echo "Колличество мест ".$this->seats;
  }

}