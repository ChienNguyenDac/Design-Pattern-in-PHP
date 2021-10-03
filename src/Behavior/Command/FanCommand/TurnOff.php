<?php 

namespace NDC\Behavior\Command\FanCommand;
use NDC\Behavior\Command\FanCommand\AbstractCommand;

class TurnOff extends AbstractCommand{
    public function excute()
    {
        $this->fan->turnOff();
    }
}