<?php

namespace NDC\Creational\Builder;

class House{
    private $doorNum, $floorNum, $tableNum, $chairNum, $roomNum;
    public function __construct($doorNum, $floorNum, $roomNum, $tableNum, $chairNum)
    {
        $this->doorNum = $doorNum;
        $this->floorNum = $floorNum;
        $this->roomNum = $roomNum;
        $this->tableNum = $tableNum;
        $this->chairNum = $chairNum;
    }
    public function getDoor(){
        return $this->doorNum;
    }
    public function getFloor(){
        return $this->floorNum;
    }
    public function getRoom(){
        return $this->roomNum;
    }
    public function getTable(){
        return $this->tableNum;
    }
    public function getChair(){
        return $this->chairNum;
    }
}