<?php
//numero de segundos desde 1970
echo time()."\n";
$ahora=time();
//estructurar la fecha a nuestro gusto
echo date("d/m/Y",$ahora)."\n";
//para sacar una fecha como string
strtotime($ahora);
echo date("d/m/Y",mktime(0,0,0,10,12,2022));
?>