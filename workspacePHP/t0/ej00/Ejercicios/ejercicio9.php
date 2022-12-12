<?php
/*con este ejercicio agregamos lo que 
 * querenmos por la fila del array y el bucle lo usamos para contar*/
echo "dime un numero del 1 al 10 : ";
fscanf(STDIN,"%d/n",$numero);
echo "de que manera quieres : ";
fscanf(STDIN,"%s/n",$formatoEntrada);
$formato=[
    'numero'=>[1,2,3,4,5,6,7,8,9,10],
    'Romano'=>["I","II","III","IV","V","VI","VII","IIX","IX","X"]];
for ($i = 0; $i<$numero ; $i++) {
    echo "{$formato[$formatoEntrada][$i]}--";
}
?>