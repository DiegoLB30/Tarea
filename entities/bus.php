<?php

require "vehicle.php";

class Bus extends Vehicle
{
    const numWheels = 4;

    const place = "street";

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


$bus = new Bus("Mercedes Benz", "343", "Azul", 25);

