<?php
//control+ shift + f para dar formato al codigo
//TODAS LAS VARIABLES EN MINUNSCULAS y con CAMELLO o con guion bajo como espacio

//Declaro las variables
$nombre="Gonzalo";
$edad = 18;
$v = true;
$a=3;
$b=4;
$c=0;
//Constantes
const pi=3.1416;
//Salto de linea \n
//Resultado 
echo "Me llamo  $nombre y mi edad es de $edad años \n";
echo "El resultado de $edad mas 5 =" . ($edad+5)."\n";
echo "Valor es igual a = ".$v+5 ."\n";
echo pi+4;
//comparacion 
if ($a==$b){
    echo  "SI";
}
    else {
        echo "No";
    }
    //cortocircuito
    if ($a!=0 && $c!=0){
        echo "Si";
    }else{
        echo "No";
    }
//ternario
$a =(true ? "Pepe":"Juan");
echo $a."\n";
$a =(FALSE ? "Pepe":"Juan");
echo $a;
?>