<?php

class motorcycle extends vehicle
{
private $brand = "honda";
private $model = "navi";
private $color = "blanco";
private $num_wheels = 2;
private $num_seat = 2;
private $place = "street";

public function getBrand()
{
return $this->brand;
}

public function getModel()
{
return $this->model;
}

public function getColor(){

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

$moto = new motorcycle();