<?php

namespace src\entities;

class Conexion{
    protected $fOpen;

    public function __construct(){
         $this->fOpen = fopen("automoviles.csv", "r");
    }

    public function getInfo()
    {
        echo "<table>";

        while (($datos = fgetcsv($this->fOpen, 1000, ";"))!==false){

        echo "<tr>";

        foreach ($datos as $inf)
        {
            echo "<td>$inf</td>";
        }
        echo "</tr>";
        }

        fclose($this->fOpen);

        echo "</table>";
    }


}