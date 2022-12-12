<?php
//entrada datos
echo 'introduce un numero: ';
fscanf(STDIN,"%d\n",$numero);
echo $numero;
echo 'Dime tu nombre: ';
//para cadenas de una cadena
fscanf(STDIN,"%s\n",$nombre);
echo 'tu nombre'.$nombre.' que tal estas';
//para cadenas de muchas palabras
$variable=readline();
echo $variable;

?>