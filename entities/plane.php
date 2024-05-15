<?php

require "vehicle.php";

class Plane extends Vehicle
{
    const numWheels = 2;
    const place = "sky";

    public function getWheels()
    {
        return self::numWheels;
    }

    public function getPlace()
    {
        return self::place;
    }

    public function isPublic()
    {
        return true;
    }

}

$plane = new Plane("boeing", "747", "blanco", 350);