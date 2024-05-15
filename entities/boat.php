<?php

require_once "Vehicle.php";

class Boat extends Vehicle
{

    const PLACE = "water";

    public function getPlace()
    {
        return self::PLACE;
    }

    public function isPublic()
    {
        return false;
    }

}

