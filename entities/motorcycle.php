<?php

require "vehicle.php";

class Motorcycle extends Vehicle
{
const numWheels = 2;
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

$moto = new Motorcycle("honda", "navi", "rojo", 2);