<?php

namespace NDC\Behavior\Command\FanCommand;
use NDC\Behavior\Command\FanCommand\AbstractCommand;

class ChangeSpeed extends AbstractCommand{
    public function excute()
    {
        $this->fan->changeSpeed($this->speed);
    }
}