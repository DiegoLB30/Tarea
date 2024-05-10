<?php

require "vehicle.php";

class Boat extends Vehicle
{

    const place = "water";

    public function getPlace()
    {
        return self::place;
    }

    public function isPublic()
    {
        return false;
    }

}

$boat = new Boat("honda", "civic", "negro", 5);