<?php
$a[5]=100;
$a["platopreferido"]="lentejas";
//iniciarlo
$c=["hola"=>"","adios"=>""];
echo $a[5]."\n";
echo $a["platopreferido"]."\n";
//as clave => valor
foreach ($a as $k =>$v) {
    echo $k." - ".$v."\n";
}
?>