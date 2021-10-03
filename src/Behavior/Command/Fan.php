<?php

namespace NDC\Behavior\Command;

//  commandee
class Fan{
    private $speed, $lastSpeed;
    public function __construct()
    {   
        $this->speed = 0;
        $this->lastSpeed = NULL;
    }

    public function getSpeed(){
        return $this->speed;
    }

    public function getLastSpeed(){
        return $this->lastSpeed;
    }

    public function changeSpeed($speed){
        $this->speed = $speed;
    }

    public function turnOn(){
        $this->speed = $this->lastSpeed || 1;
    }

    public function turnOff(){
        $this->lastSpeed = $this->speed;
        $this->speed = 0;
    }
}