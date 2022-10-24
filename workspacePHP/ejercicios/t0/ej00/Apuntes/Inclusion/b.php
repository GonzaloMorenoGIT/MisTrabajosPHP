<?php
echo "B";
//llama al fichero por el nombre varias varias veces es mas restrictivo y en el caso de 
//que no exista saltara un error
require 'a.php';
//con el onces lo añades una vez en cuanto lo llamas la siguiente vez pasa al riguiente
require_once 'a.php';
// es preferible usar el onces
//includes si no existe no pasa nada normalmente se le inclullen las librerias de funciones 
include_once 'a.php';
?>