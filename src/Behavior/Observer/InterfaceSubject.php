<?php

namespace NDC\Behavior\Observer;
use NDC\Behavior\Observer\InterfaceObserver;

interface InterfaceSubject{
    public function attach(InterfaceObserver $observer);
    public function dettach(InterfaceObserver $observer);
    public function render();
}