<?php
$a=[];//array vacio
array_push($a,3);
//para meter arrays primero le das el nombre del
//array y luego el valor
print_r($a);
array_push($a,10);
print_r($a);
$a[]=3000;
print_r($a);
array_unshift($a,"primero");//mete el valor como el primero
//para sacar elementos del array
array_pop($a);//quita el ultimo elemento del array
unset($a[2]);//quita el elemento que tu quieras del array
print_r($a);
array_shift($a);
print_r($a);
//manejo de colas
//verificar si hay un elemento
//in array(primero el valor, el array)
if (in_array(3,$a)){
    echo "si";
}else{
    echo "no";
}
//array_keis copia los indices los arrays en uno nuevo
$b=array_keys($a);
print_r($b);
?>