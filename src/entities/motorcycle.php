<?php

namespace src\entities;
require_once "Vehicle.php";

class Motorcycle extends Vehicle
{
const NUMWHEELS = 2;
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
    return false;
}

}

