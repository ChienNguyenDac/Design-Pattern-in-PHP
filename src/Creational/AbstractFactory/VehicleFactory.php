<?php

namespace NDC\Creational\AbstractFactory;

abstract class VehicleFactory{
    abstract function makeCar($price, $name);
    abstract function makeTruck($price); 
}


