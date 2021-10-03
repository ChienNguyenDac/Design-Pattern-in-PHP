<?php

use NDC\Behavior\Command\Fan;
use NDC\Behavior\Command\Remote;
use NDC\Behavior\Command\FanCommand\ChangeSpeed;
use NDC\Behavior\Command\FanCommand\TurnOff;
use NDC\Behavior\Command\FanCommand\TurnOn;

class CommandTest extends \Codeception\Test\Unit
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
        $fan = new Fan();
        $remote = new Remote();
        
        //  turn on
        $remote->setCommand(new TurnOn($fan));
        $remote->excute();

        $this->assertEquals($fan->getSpeed(), 1);

        //  change speed
        $remote->setCommand(new ChangeSpeed($fan));
        $remote->setSpeed(3);
        $remote->excute();

        $this->assertEquals($fan->getSpeed(), 3);

        //  turn off
        $remote->setCommand(new TurnOff($fan));
        $remote->excute();

        $this->assertEquals($fan->getLastSpeed(), 3);
    }
}