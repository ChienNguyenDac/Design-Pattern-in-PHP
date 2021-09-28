<?php

use NDC\Structural\Facade\Server;
use NDC\Structural\Facade\Client;

class FacadeTest extends \Codeception\Test\Unit
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
        $myAcc = new Client( new Server('589'), 'dacchien', '123456');
        $this->assertEquals($myAcc->goToAdmin(), false);
    }
}