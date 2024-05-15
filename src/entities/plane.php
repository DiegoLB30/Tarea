<?php

namespace src\entities;

class Plane extends Vehicle
{
    const NUMWHEELS = 2;
    const PLACE = "sky";

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

