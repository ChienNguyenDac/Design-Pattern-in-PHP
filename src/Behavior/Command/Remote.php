<?php

namespace NDC\Behavior\Command;
use NDC\Behavior\Command\FanCommand\AbstractCommand;

//  client
class Remote{
    private AbstractCommand $command;

    public function setCommand(AbstractCommand $command){
        $this->command = $command;
    }

    public function setSpeed($speed){
        $this->command->setSpeed($speed);
    }

    public function excute(){
        $this->command->excute();
    }
}