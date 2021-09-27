<?php

namespace NDC\Creational\AbstractFactory;

use NDC\Creational\AbstractFactory\VehicleFactory;
use NDC\Creational\AbstractFactory\Vehicle\HuyndaiCar;
use NDC\Creational\AbstractFactory\Vehicle\HuyndaiTruck;

class HuyndaiFactory extends VehicleFactory{
    private $brand = 'Huyndai';
    function makeCar($price, $name)
    {
        return new HuyndaiCar($price, $name);
    }
    function makeTruck($name)
    {   
        return new HuyndaiTruck($name);
    }
}