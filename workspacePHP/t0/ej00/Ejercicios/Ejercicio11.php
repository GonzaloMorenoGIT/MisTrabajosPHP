<?php
/*
Mejorar el programa anterior para que cicle alrededor 
de la introducción del número N, hasta que sea un número
entre 1 y 10, y para que cicle en la introducción del
formato hasta que sea un formato que el programa conozca
pudiendo estar abierto a la introducción de nuevos formatos,
sin necesidad de cambiar el código de comprobación)
 */
$datosUsuario="Gonzalo:Moreno:2934897294//Ana:Perez:387894354";
$b=explode(':', $datosUsuario);
$nombre2=substr($datosUsuario,27,27);
$nombreLimio=explode(':', $nombre2);
$nombreSeparado=explode('//', $b[2]);
echo "nombre $b[0]:\n
apellidos : $b[1]\n
telefono : $nombreSeparado[0]\n
----persona------------\n
nombre $nombreLimio[0]\n
appellidos $b[3]\n
telefono $b[4]";
?>