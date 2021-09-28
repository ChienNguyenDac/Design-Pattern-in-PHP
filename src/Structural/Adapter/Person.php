<?php

namespace NDC\Structural\Adapter;

class Person{
    public function sayVN(){
        $say = new Say(new SayVN());
        return $say->say('Hi!');
    } 
}