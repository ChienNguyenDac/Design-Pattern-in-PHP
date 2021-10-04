<?php

namespace NDC\Behavior\Template;
use NDC\Behavior\Template\Bakery;

class DongTam extends Bakery{
    public function useSmallMachine($flour_weight)
    {
        $this->cake_number = floor($flour_weight / 8);
    }
}