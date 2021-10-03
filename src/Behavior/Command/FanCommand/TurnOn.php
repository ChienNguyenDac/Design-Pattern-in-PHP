<?php

namespace NDC\Behavior\Command\FanCommand;
use NDC\Behavior\Command\FanCommand\AbstractCommand;

class TurnOn extends AbstractCommand{
    public function excute()
    {
        $this->fan->turnOn();
    }
}