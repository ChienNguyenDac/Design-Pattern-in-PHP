<?php

namespace Ndc\Phpatterns\Creational\AbstractFactory\Vehicle;

abstract class AbstractVehicle{
    abstract function getPrice();
    abstract function getBrand();
    abstract function getType();
}

abstract class AbstractCar extends AbstractVehicle{
    protected $type = 'Car';
}

abstract class AbstractTruck extends AbstractVehicle{
    protected $type = 'Truck';
}

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

class HuyndaiTruck extends AbstractTruck{
    private $price, $name, $brand;
    function __construct($name)
    {
        $this->name = $name;
        $this->brand = 'Huyndai';
        if( $name==='Mighty')
            $this->price = 2000;
        else
            $this->price = 1500;
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