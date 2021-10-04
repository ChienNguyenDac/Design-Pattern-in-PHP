<?php

use NDC\Behavior\Template\DongTam;
use NDC\Behavior\Template\BaoThanh;

class TemplateTest extends \Codeception\Test\Unit
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
        $dongtam = new DongTam();
        $baothanh = new BaoThanh();

        $dongtam->make(500);
        $baothanh->make(500);
        $this->assertEquals($dongtam->getCakeNumber(), $baothanh->getCakeNumber());

        $dongtam->make(50);
        $baothanh->make(50);
        $this->assertNotEquals($dongtam->getCakeNumber(), $baothanh->getCakeNumber());
    }
}