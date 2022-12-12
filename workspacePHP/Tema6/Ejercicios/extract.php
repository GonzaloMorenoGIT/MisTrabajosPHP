<?php 
    $a=['color'=>'rojo','comida'=>'Panceta'];
    extract($a);
    echo "Color, ".$color."\n";
    echo "Comida ".$comida;
?>