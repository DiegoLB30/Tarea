<?php

namespace src\entities;

class Conexion{
    protected $fo;

    public function __construct(){
         $this->fo = fopen("automoviles.csv", "r");
    }

    public function getInfo()
    {
        echo "<table>";

        while (($datos = fgetcsv($this->fo, 1000, ";"))!==false){

        echo "<tr>";

        foreach ($datos as $inf)
        {
            echo "<td>$inf</td>";
        }
        echo "</tr>";
        }

        fclose($this->fo);

        echo "</table>";
    }


}