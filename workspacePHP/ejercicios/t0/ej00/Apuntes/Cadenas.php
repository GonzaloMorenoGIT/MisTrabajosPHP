<?php
$c="abcdefg";
//para ver la longitud de la cadena .lenth java
$longitud=strlen($c);
//subcadena 
echo substr($c,3,3)."\n";
//para dejar el caracter limpio sin espacios ni tabuladores
echo '*'.trim($c).'*'."\n";
//con Ltrim solo los de la izquierda y con Rtrim los de la derecha
//si yo quiero quitar una sola palabra
echo '*'.trim($c,'a').'*';
//explotar
$cadena="En un lugar de la mancha";
$a=explode(' ',$cadena);
print_r($a);
//para implotar
$ab=implode(' ', $cadena);
echo $abº;
?>