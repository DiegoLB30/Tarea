<?php

namespace src\entities;
require_once "Vehicle.php";

class Bus extends Vehicle
{
    const NUMWHEELS = 4;
    const PLACE = "street";

    public function getWheels()
    {
        return self::NUMWHEELS;
    }

    public function getPlace()
    {
        return self::PLACE;
    }

    public function isPublic()
    {
        return true;
    }
}

