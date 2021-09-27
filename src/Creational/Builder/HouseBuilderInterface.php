<?php

namespace NDC\Creational\Builder;

interface HouseBuilderInterface {
    public function setDoor($doorNum);
    public function setFloor($floorNum);
    public function setRoom($roomNum);
    public function setTable($tableNum);
    public function setChair($chairNum);
    public function build();
}
