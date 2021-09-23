<?php

use Ndc\Phpatterns\Creational\AbstractFactory\HuyndaiVehicleFactorys;
use Ndc\Phpatterns\Creational\AbstractFactory\ToyotaVehicleFactory;

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
        $huyndai = new HuyndaiVehicleFactory();
        $toyota = new ToyotaVehicleFactory();

        $Kona = $huyndai->makeCar(1000, 'Kona');
        $Vios = $toyota->makeCar(1100, 'Vios');

        $Mighty = $huyndai->makeTruck('Mighty');
        $Hilux = $toyota->makeTruck('Hilux');

        $this->assertEquals($Mighty->getPrice(), 2000);
        $this->assertEquals($Mighty->getType(), 'Truck');

        $this->assertEquals($Hilux->getPrice(), 1800);
;    }
}