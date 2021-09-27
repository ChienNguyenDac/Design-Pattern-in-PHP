<?php 

namespace NDC\Creational\AbstractFactory\Vehicle;

use NDC\Creational\AbstractFactory\Vehicle\AbstractTruck;

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

$a = new HuyndaiTruck('chien');
echo var_dump($a);