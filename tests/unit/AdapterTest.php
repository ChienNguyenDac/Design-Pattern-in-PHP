<?php

use NDC\Structural\Adapter\Person;

class AdapterTest extends \Codeception\Test\Unit
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
        $vietnam = new Person();
        $this->assertEquals($vietnam->sayVN(), 'Xin chao!');
    }
}