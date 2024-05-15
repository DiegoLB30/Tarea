<?php

abstract class Vehicle
{

    protected $brand;
    protected $model;
    protected $color;
    protected $numSeat;

    public function __construct($brand, $model, $color, $numSeat)
    {
        $this->brand = $brand;
        $this->model = $model;
        $this->color = $color;
        $this->numSeat = $numSeat;
    }

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


    public function getSeat()
    {
        return $this->numSeat;
    }

    abstract public function isPublic();

}






