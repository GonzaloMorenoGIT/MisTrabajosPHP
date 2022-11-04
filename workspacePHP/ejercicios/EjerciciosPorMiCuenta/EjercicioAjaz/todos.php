<?php 
$i=rand(1,3);
$nombre='';
switch ($i){
    case 1:$nombre="Tarea1";break;
    case 2:$nombre="Tarea2";break;
    case 3:$nombre="Tarea3";break;
}
echo $nombre;
?>