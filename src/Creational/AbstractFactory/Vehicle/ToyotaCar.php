<?php

namespace NDC\Creational\AbstractFactory\Vehicle;
use NDC\Creational\AbstractFactory\Vehicle\AbstractCar;

class ToyotaCar extends AbstractCar{
    private $price, $brand, $name;
    function __construct($price, $name)
    {
        $this->price = $price;
        $this->name = $name;
        $this->brand = 'Toyota';
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