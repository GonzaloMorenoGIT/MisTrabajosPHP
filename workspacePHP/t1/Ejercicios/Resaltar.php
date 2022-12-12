<?php
function NumerosPares($numero){
    
    if ($numero%2==0) {
        return $resultado=true;
    }else{
        return $resultado=false;
    }
}
function resaltar($numero,$color="blue") {
    return "<h1 style=\"color:$color\">$numero</h1>";
}
?>