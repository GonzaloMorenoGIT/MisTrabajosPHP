<?php 
include_once'Ejercicio9.php';
for ($i=0; $i <=50; $i++) { 
     if ($i%2==1) {
        Resaltar($i);
     }else{
        echo"<h1>$i</h1>";
     }
}
?>