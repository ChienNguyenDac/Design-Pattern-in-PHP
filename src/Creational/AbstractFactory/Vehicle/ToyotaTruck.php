<?php

namespace NDC\Creational\AbstractFactory\Vehicle;
use NDC\Creational\AbstractFactory\Vehicle\AbstractTruck;

class ToyotaTruck extends AbstractTruck{
    private $price, $name, $brand;
    function __construct($name)
    {
        $this->name = $name;
        $this->brand = 'Toyota';
        if($name === 'Innova')
            $this->price = 2100;
        $this->price = 1800;
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