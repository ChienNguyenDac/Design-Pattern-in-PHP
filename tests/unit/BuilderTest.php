<?php

use NDC\Creational\Builder\HouseBuilder;

class BuilderTest extends \Codeception\Test\Unit
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
        $house = new HouseBuilder();
        $myHome = $house->setDoor(5)->setRoom(2)->setFloor(1)->build();
        $this->assertEquals($myHome->getDoor(), 5);
        $this->assertEquals($myHome->getRoom(), 2);
    }
}
