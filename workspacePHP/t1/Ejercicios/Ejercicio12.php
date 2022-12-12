<?php
$Seleccionados=[
    'f'=>'Futbol',
    't'=>'Tenis'];
include_once 'UtilHTML2.php';
echo '<form action="UtilHTML2.php">';
echo $checkbox=pintarcheckboxes('aficion', [
    't' => 'Tenis',
    'f' => 'Futbol',
    'b' => 'Baloncesto',
    'P' => 'Petanca'
], [
    'T',
    'F',
    'B',
],$Seleccionados);
echo 'cuantas opciones quieres<input type="number" name="numero" id=""><br>';
echo pintarSelect('Aficiones',['D'=>'Deporte','M'=>'Musica','P'=>'Pintar']);
echo '<Imput type="submit">';
echo "</form>";
?>