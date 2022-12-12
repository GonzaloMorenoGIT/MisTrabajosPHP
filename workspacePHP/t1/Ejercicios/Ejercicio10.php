<?php
/*Crear un script “impares.php” que muestre los números del 1
  al 50 (uno por cada línea) en la que aparezcan los números 
  impares resaltados utilizando la función resaltar antes
  creada.
 */
echo "Numeros imares";
require_once 'Resaltar.php';
$Resultado;
for ($i = 0; $i <= 50; $i++) {
    if ($Resultado=NumerosPares($i)==FALSE) {
        echo resaltar($i);
    }else{
        echo "<h1>$i</h1>";
    } 
}
?>