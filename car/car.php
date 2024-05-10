<?php

class car extends vehicle
{
    private $car = [];
    private $brand = "honda";
    private $model = "civic";
    private $color = "negro";
    private $num_wheels = 4;
    private $num_seat = 5;
    private $place = "street";

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

$car = new car();