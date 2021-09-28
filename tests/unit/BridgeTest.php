<?php

use NDC\Structural\Bridge\Laptop\Asus;
use NDC\Structural\Bridge\Laptop\Dell;
use NDC\Structural\Bridge\Core\CoreI3;
use NDC\Structural\Bridge\Core\CoreI5;

class BridgeTest extends \Codeception\Test\Unit
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
        $dell_i3 = new Dell(new CoreI3());
        $dell_i5 = new Dell(new CoreI5());
        $this->assertTrue($dell_i3->getPrice() < $dell_i5->getPrice());

        $asus = new Asus(new CoreI3());
        $this->assertTrue($asus->getPrice() < $dell_i3->getPrice());
        $this->assertEquals($asus->getPrice(),1600);
    }
}