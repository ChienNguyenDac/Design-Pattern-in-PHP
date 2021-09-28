<?php 

namespace NDC\Structural\Bridge\Laptop;
use NDC\Structural\Bridge\AbstractLaptop;

class Dell extends AbstractLaptop{
    public function getPrice()
    {
        return $this->core->getPrice() + 1200;
    }
}