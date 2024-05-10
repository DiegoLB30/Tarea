<?php

class boat extends vehicle
{
    private $brand = "dufour";
    private $color = "blanco";
    private $num_seat = 6;
    private $place = "water";

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

    public function getSeat()
    {
        return $this->num_seat;
    }

    public function getPlace()
    {
        return $this->place;
    }

}

$boat = new boat();