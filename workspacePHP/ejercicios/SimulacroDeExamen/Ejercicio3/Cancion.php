<?php 
$i=rand(1,5);
$nombre='';
switch ($i){
    case 1:$nombre='Sweat'; break;
    case 2:$nombre='Abba'; break;
    case 3:$nombre='Sweat dreams'; break;
    case 4:$nombre='Turn it up'; break;
    case 5:$nombre='Bla Bla Bla'; break;
}
echo $nombre;
?>