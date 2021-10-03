<?php

namespace NDC\Behavior\Command\FanCommand;
use NDC\Behavior\Command\Fan;

abstract class AbstractCommand{
    protected Fan $fan;
    protected $speed;
    public function __construct(Fan $fan)
    {
        $this->fan = $fan;
    }
    public function setSpeed($speed){
        $this->speed = $speed;
    }

    abstract function excute();
}