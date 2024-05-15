<?php

require "vehicle.php";

class Bicycle extends Vehicle
{

    const place = "street";

    public function getPlace()
    {
        return self::place;
    }

    public function isPublic()
    {
        return false;
    }
}


$bicycle = new Bicycle("shimano", "29", "amarillo", 1);



