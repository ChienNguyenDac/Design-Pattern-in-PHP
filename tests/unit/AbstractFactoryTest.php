<?php

use NDC\Creational\AbstractFactory\HuyndaiFactory;
use NDC\Creational\AbstractFactory\ToyotaFactory;

class AbstractFactoryTest extends \Codeception\Test\Unit
{
    /**
     * @var \UnitTester
     */
    protected $tester;
    
    protected function _before()
    {
    }

    protected function _after()
    {
    }

    // tests
    public function testSomeFeature()
    {
        $huyndai = new HuyndaiFactory();
        $toyota = new ToyotaFactory();

        $Kona = $huyndai->makeCar(1000, 'Kona');
        $Vios = $toyota->makeCar(1100, 'Vios');

        $Mighty = $huyndai->makeTruck('Mighty');
        $Hilux = $toyota->makeTruck('Hilux');

        $this->assertEquals($Mighty->getPrice(), 2000);
        $this->assertEquals($Mighty->getType(), 'Truck');

        $this->assertEquals($Hilux->getPrice(), 1800);
    }
}