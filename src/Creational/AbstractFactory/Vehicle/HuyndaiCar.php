<?php

namespace NDC\Creational\AbstractFactory\Vehicle;

use NDC\Creational\AbstractFactory\Vehicle\AbstractCar;

class HuyndaiCar extends AbstractCar{
    private $price, $brand, $name;
    function __construct($price, $name)
    {
        $this->price = $price;
        $this->name = $name;
        $this->brand = 'Huyndai';
    }
    function getPrice()
    {
        return $this->price;
    }
    function getBrand()
    {
        return $this->brand;
    }
    function getType()
    {
        return $this->type;
    }
}

echo 5;