<?php 
$i=rand(1,4);
$peli='';
switch ($i){
    case 1:$peli='Start Wars';break;
    case 2:$peli='Titanic';break;
    case 3:$peli='No time to die';break;
    case 4:$peli='Goldeneye';break;
}
echo $peli;
?>