<?php

class bus extends vehicle
{
    private $brand = "mercedes benz";
    private $color = "azul";
    private $num_wheels = 4;
    private $num_seat = 25;
    private $place = "street";

    public function getBrand()
    {
        return $this->brand;
    }

    public function getColor()
    {
        return $this->color;
    }

    public function setColor()
    {
        return $this->color;
    }

    public function getWheels()
    {
        return $this->num_wheels;
    }

    public function getSeat()
    {
        return $this->num_seat;
    }

    public function getPlace()
    {
        return $this->place;
    }
}

$bus = new bus();