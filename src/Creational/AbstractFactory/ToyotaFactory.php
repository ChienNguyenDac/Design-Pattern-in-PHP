<?php

namespace NDC\Creational\AbstractFactory;

use NDC\Creational\AbstractFactory\VehicleFactory;
use NDC\Creational\AbstractFactory\Vehicle\ToyotaCar;
use NDC\Creational\AbstractFactory\Vehicle\ToyotaTruck;

class ToyotaFactory extends VehicleFactory{
    private $brand = 'Toyota';
    function makeCar($price, $name)
    {   
        return new ToyotaCar($price, $name);
    }
    function makeTruck($name)
    {
        return new ToyotaTruck($name);
    }
}

echo 5;

