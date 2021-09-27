<?php

namespace NDC\Creational\Builder;

use NDC\Creational\Builder\House;
use NDC\Creational\Builder\HouseBuilderInterface;

class HouseBuilder implements HouseBuilderInterface{
    private $doorNum, $floorNum, $roomNum, $tableNum, $chairNum;
    
    public function setFloor($floorNum)
    {
        $this->floorNum = $floorNum;
        return $this;
    }
    public function setDoor($doorNum)
    {
        $this->doorNum = $doorNum;
        return $this;
    }
    public function setRoom($roomNum)
    {
        $this->roomNum = $roomNum;
        return $this;
    }
    public function setTable($tableNum)
    {
        $this->tableNum = $tableNum;
        return $this;
    }
    public function setChair($chairNum)
    {
        $this->chairNum = $chairNum;
        return $this;
    }
    public function build()
    {
        return new House($this->doorNum, $this->floorNum, $this->roomNum, $this->tableNum, $this->chairNum);
    }
}

$myHome = new HouseBuilder();
echo var_dump($myHome);