<?php

require "vehicle.php";

class Car extends Vehicle
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
        return false;
    }
}

$car = new Car("honda", "civic", "negro", 5);