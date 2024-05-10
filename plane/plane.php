<?php

class plane extends vehicle
{
    private $brand = "Boeing";
    private $model = "747";
    private $color = "blanco";
    private $num_wheels = 2;
    private $num_seat = 350;
    private $place = "sky";

    public function getBrand()
    {
        return $this->brand;
    }

    public function getModel()
    {
        return $this->model;
    }

    public function getColor()
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

$plane = new plane();