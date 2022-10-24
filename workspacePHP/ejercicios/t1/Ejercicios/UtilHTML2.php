<?php
function pintarcheckboxes($nombre, $ArrayValueLabel,$Seleccionados)
{
    foreach ($ArrayValueLabel as $k => $v) {
        if(in_array(strtoupper($k), $Seleccionados)){
        echo "$v<input type=\"checkbox\" name=\"{$nombre}[]\"value=\"$k\" id=\"$v\" checked=\"checked\">";
        echo "<label for=\"$v\">";
        }else{
            echo "<label for=\"$v\">";
            echo "$v<input type=\"checkbox\" name=\"{$nombre}[]\"value=\"$k\" id=\"$v\">";
        }
        }
        
    }
/*function pintarSelect($nombre,$ArrayDatos,$seleccionados=[]) {
    foreach ($ArrayDatos as $k=>$v){
        if (in_array($k, $seleccionados)) {
            $select="<select name=\"$nombre\" id=\"datos1\">";
        }else{
        $opciones="<option value=\"$v">$v<"/option>";
        }}
    
    echo $select;
    echo $opciones;
    echo "</select>";
}
*/
?>