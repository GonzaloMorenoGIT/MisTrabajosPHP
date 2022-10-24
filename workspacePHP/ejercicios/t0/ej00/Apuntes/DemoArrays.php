<?php 
//demo array sencillo
$a[0]=1;
$a[1]=3;
$a[2]=true;
//otras declaraciones
$b=[1,2,3,4,5,6];
//arrays anidados (Bidimensionales)
$anidados=[
   "numeros"=>[1,2,3],
    "letras"=>["a","b","c"],
];
echo "La posicion 0 0 da :{$anidados["numeros"][0]}\n";
//para inicializarlo 0 clave => valor
$c=[0=>1,1=>2];
for ($i = 0; $i < sizeof($a); $i++) {
    echo $a[$i]."\n";
}

foreach ($a as $indice=> $elemento){
    echo $indice." ".$elemento."\n";
}
foreach ($b as $key => $value) {
    echo " la posicion es ".$key." y el valor es ".$value."\n";
}
//para rellenar los arrays ?
for ($i = 0; $i < sizeof($b); $i++) {
    $b[$i]=readline();
}
?>