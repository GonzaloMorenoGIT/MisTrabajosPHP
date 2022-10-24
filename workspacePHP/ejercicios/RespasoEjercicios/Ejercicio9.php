<?php 
$frase=isset($_POST['frase'])? $_POST['frase']:null;
function Resaltar($frase){
echo <<<Radio
<h1><u>$frase</u></h1>
Radio;
//<a href="utilHTML.php">Volver</a>
}
//ejercicio 11
function PintarRadios($nombre, $arrayValueLabel=[], $seleccionado=[]){
    foreach($arrayValueLabel as $k => $v){
        echo <<<Radio
        Resultado
        Selecciona una opcion <label name="$nombre">
        $v<input type="radio" name="$nombre" value="$k" id="$v">
        </label>
        Radio;
    }
}
//ejercicio 12
function pintarCheckboxes($nombre, $arrayValueLabel,$ValorSeleccionado){
    //Recuerda en un checkbox la clave del array va en el label y en el value y el valor del array en el id 
    //y el name se pone el mismo por que lo que recoge es el propio Array
    foreach ($arrayValueLabel as $k=> $v){
        if ($ValorSeleccionado==='T') {
            echo <<<Radio
            <label for="$v">
            $v<input type="checkbox" name="{$nombre}[]" value="$k" id="$v"checked="chequed">
            </label>
            Radio;
        }else{
            echo <<<Radio
            <label for="$v">
            $v<input type="checkbox" name="{$nombre}[]" value="$k" id="$v">
            </label>
            Radio;
        }
    }
}
echo Resaltar($frase);
echo PintarRadios('nombre',[
    'C'=>'Cine',
    'D'=>'Deportes'
],['D'=>'Deportes']);
echo pintarCheckboxes('deportes',['T'=>'Tenis','F'=>'Futbol','P'=>'Ping Pong'],['T'=>'Tenis']);
?>