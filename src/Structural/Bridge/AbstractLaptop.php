<?php 

namespace NDC\Structural\Bridge;
use NDC\Structural\Bridge\CoreInterface;

abstract class AbstractLaptop{
    protected $core;
    public function __construct(CoreInterface $core)
    {
        $this->core = $core;
    }

    public abstract function getPrice();
}