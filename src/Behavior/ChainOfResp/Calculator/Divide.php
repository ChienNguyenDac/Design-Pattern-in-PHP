<?php

namespace NDC\Behavior\ChainOfResp\Calculator;
use NDC\Behavior\ChainOfResp\AbstractChainCalc;
use NDC\Behavior\ChainOfResp\Expression;

class Divide implements AbstractChainCalc{
    private $nextChain;
    public function nextChainCal(AbstractChainCalc $nextChain){
        $this->nextChain = $nextChain;
    }

    public function calculate(Expression $exp){
        if($exp->getOperator() === '/'){
            return $exp->getParamter1() / $exp->getParamter2();
        }        
        if(isset($this->nextChain))
            return $this->nextChain->calculate($exp);
        return 'CANNOT CALCULATE';
    }
}