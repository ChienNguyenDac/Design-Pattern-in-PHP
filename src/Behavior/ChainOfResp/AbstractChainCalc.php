<?php 

namespace NDC\Behavior\ChainOfResp;
use NDC\Behavior\ChainOfResp\Expression;

interface AbstractChainCalc{
    public function nextChainCal(AbstractChainCalc $nextChain);
    public function calculate(Expression $exp);
}