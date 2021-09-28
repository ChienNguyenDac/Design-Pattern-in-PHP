<?php

namespace NDC\Structural\Bridge\Laptop;
use NDC\Structural\Bridge\AbstractLaptop;

class Asus extends AbstractLaptop{
    public function getPrice()
    {
        return $this->core->getPrice() + 1100;
    }
}