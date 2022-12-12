<?php 
function getAllCoche(){
    $db = new PDO ("mysql:host=localhost;dbname=test","root","");
    $resultado = $db->query("select id,nombre as nom from persona");
    $db=null;
    return $resultado;
}
?>