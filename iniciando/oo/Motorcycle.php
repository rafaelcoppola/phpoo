<?php

require_once('Vehicle.php');

class Motorcycle extends Vehicle
{
    public function __construct($brand, $color, $engine)
    {
        parent::__construct($brand, strtoupper($color), $engine);

        // echo $this->color;
    }
    public function getBrand()
    {
        return $this->brand;
    }
}
