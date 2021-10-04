<?php

namespace NDC\Behavior\Observer\Consumer;
use NDC\Behavior\Observer\InterfaceObserver;

class CartComponent implements InterfaceObserver{
    public $dom, $data;
    public function update($state)
    {
        $this->data = count($state['products']);
        $this->dom = '<p>' . $this->data . '</p>'; 
    }
}