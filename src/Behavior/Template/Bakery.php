<?php

namespace NDC\Behavior\Template;

abstract class Bakery{
    protected $cake_number;
    
    public function __construct()
    {
        $this->cake_number = 0;
    }

    public function getCakeNumber(){
        return $this->cake_number;
    }

    public function make($flour_weight){
        if($flour_weight < 100)
            $this->useSmallMachine($flour_weight);
        else
            $this->useBigMachine($flour_weight);
    }

    public function useBigMachine($flour_weight){
        $this->cake_number = floor($flour_weight / 100);
    }

    abstract function useSmallMachine($flour_weight);
}