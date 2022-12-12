<?php
//Este ejercicio en cuanto sepamos como usar las cadenas rehacerlo 
//lo he hecho para practicar los arrays
echo "dime un nombre :";
fscanf(STDIN,"%s/n",$nombre);
echo "dime un apellido : ";
fscanf(STDIN,"%s/n",$Apellido);
echo "dime un telefono :";
fscanf(STDIN,"%s/n",$telefono);
$cadena="$nombre:$Apellido:$telefono//";
$datosusuario=[
    "nombrep0"=>[$nombre,$Apellido,$telefono]];
    foreach ($datosusuario as $k =>$v){
    echo 
    "\n
    Nombre : {$datosusuario["nombrep0"][0]}\n
    Apellido : {$datosusuario["nombrep0"][1]}\n
    Telefono : {$datosusuario["nombrep0"][2]}";
};
?>