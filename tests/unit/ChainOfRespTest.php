<?php

use NDC\Behavior\ChainOfResp\Expression;
use NDC\Behavior\ChainOfResp\Calculator\Add;
use NDC\Behavior\ChainOfResp\Calculator\Sub;
use NDC\Behavior\ChainOfResp\Calculator\Multiply;
use NDC\Behavior\ChainOfResp\Calculator\Divide;


class ChainOfRespTest extends \Codeception\Test\Unit
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
        $add = new Add();
        $sub = new Sub();
        $mult = new Multiply();
        $div = new Divide();
        $add->nextChainCal($sub);
        $sub->nextChainCal($mult);
        $mult->nextChainCal($div);
    
        $exp1 = new Expression(16,8,'/');
        $exp2 = new Expression(1,2,'++');
        $this->assertEquals($add->calculate($exp1), 2);
        $this->assertEquals($add->calculate($exp2), 'CANNOT CALCULATE');
    }
}