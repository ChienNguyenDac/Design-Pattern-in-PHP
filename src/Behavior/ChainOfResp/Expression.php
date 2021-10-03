<?php

namespace NDC\Behavior\ChainOfResp;

class Expression{
    private $paramter1, $paramter2, $operator;
    public function __construct($parameter1, $parameter2, $operator)
    {
        $this->paramter1 = $parameter1;
        $this->paramter2 = $parameter2;
        $this->operator = $operator;
    }
    public function getParamter1(){
        return $this->paramter1;
    }

    public function getParamter2(){
        return $this->paramter2;
    }

    public function getOperator(){
        return $this->operator;
    }
}