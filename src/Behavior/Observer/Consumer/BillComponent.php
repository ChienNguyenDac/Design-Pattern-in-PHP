<?php

namespace NDC\Behavior\Observer\Consumer;
use NDC\Behavior\Observer\InterfaceObserver;

class BillComponent implements InterfaceObserver{
    public $header, $footer, $name, $price;
    
    public function update($state)
    {
        $this->name = $state['account'];
        $this->price = 0;
        foreach($state['products'] as $product)
        $this->price += $product['price'];
        
        $this->header = '<h2>' . $this->name . '</h2>';
        $this->footer = '<p>Total: ' . $this->price . '</p>';
    }
}