<?php

namespace NDC\Creational\AbstractFactory\Vehicle;

abstract class AbstractVehicle{
    abstract function getPrice();
    abstract function getBrand();
    abstract function getType();
}
