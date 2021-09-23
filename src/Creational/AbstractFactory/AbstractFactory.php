<?php

namespace Ndc\Phpatterns\Creational\AbstractFactory;

use Ndc\Phpatterns\Creational\AbstractFactory\Vehicle\HuyndaiCar;
use Ndc\Phpatterns\Creational\AbstractFactory\Vehicle\HuyndaiTruck;
use Ndc\Phpatterns\Creational\AbstractFactory\Vehicle\ToyotaCar;
use Ndc\Phpatterns\Creational\AbstractFactory\Vehicle\ToyotaTruck;

abstract class VehicleFactory{
    abstract function makeCar($price, $name);
    abstract function makeTruck($price); 
}

class HuyndaiVehicleFactory extends VehicleFactory{
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

class ToyotaVehicleFactory extends VehicleFactory{
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


