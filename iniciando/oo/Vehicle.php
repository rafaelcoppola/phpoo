<?php

require_once('ivehicle.php');

abstract class Vehicle implements ivehicle
{
    public $brand;
    protected $color;
    public $engine;

    public function __construct($brand = null, $color = null, $engine = null)
    {
        $this->brand = $brand;
        $this->color = $color;
        $this->engine = $engine;
    }

    public function getEngine($type = null)
    {
        return $this->engine . $type;
    }

    abstract public function getBrand();

    public function getColor()
    {
        return $this->color;
    }
}
