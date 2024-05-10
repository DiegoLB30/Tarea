<?php



class bicycle
{

    public function __construct()
    {
        $this->bicycle = [
            ["shimano", "29", "rojo", 2, 1, "street"]
        ];
    }

    public function recorrerCarac()
        {
            $result = "";
                foreach ($this->bicycle as $c) {
                list($brand, $model, $color, $num_wheels, $num_seat, $place) = $c;
                $result .= "<br />{$brand}, {$model}, {$color}, {$num_wheels}, {$num_seat}, {$place}";
        }

                var_dump($result);
        return $result;

    }
}


$bicycle = new bicycle();

echo $bicycle->recorrerCarac();
echo "<br/>";
var_dump($bicycle);
echo "<br/>";

