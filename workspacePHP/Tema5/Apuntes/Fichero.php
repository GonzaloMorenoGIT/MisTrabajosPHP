$<?php 
$f= fopen ( 'prueba.txt', 'w+' );
//Para leer un fichero
$linea=fgets($f);
echo $linea;
while (! feof($f)){
    $linea=fgets($f);
    echo $linea;
}
fclose ($f);
//Para escribir el fichero 
$texto=
<<<Texto
    hola mundo
    Texto;
file_put_contents('prueba.txt',$texto);
?>