<?php

require_once "vendor/autoload.php";

use src\entities\Bicycle;
use src\entities\Boat;
use src\entities\Bus;
use src\entities\Car;
use src\entities\Motorcycle;
use src\entities\Plane;
use src\entities\Conexion;



$bicycle = new Bicycle("shimano", "29", "amarillo", 1);

$boat = new Boat("honda", "civic", "negro", 5);

$bus = new Bus("Mercedes Benz", "343", "Azul", 25);

$car = new Car("honda", "civic", "negro", 5);

$moto = new Motorcycle("honda", "navi", "rojo", 2);

$plane = new Plane("boeing", "747", "blanco", 350);

$con = new Conexion();

var_dump($bicycle);
echo "<br/>";
var_dump($boat);
echo "<br/>";
var_dump($bus);
echo "<br/>";
var_dump($car);
echo "<br/>";
var_dump($moto);
echo "<br/>";
var_dump($plane);
echo "<br/>";

echo $con->getInfo();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Informacion</title>
</head>
<body>
</body>
</html>
