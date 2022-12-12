<?php
$BDetiquetas = [
    "ES" => ["Palabra", "Traducción", "Enviar"],
    "EN" => ["Word", "Translation", "Send"],
    "FR" => ["Mot", "Traduction", "Envoyer"]
];
$nombre = isset($_POST['valor']) ? $_POST['valor'] : null;
if ($BDetiquetas[$nombre] == $BDetiquetas["ES"]) {
    echo <<<EOD
    {$BDetiquetas["ES"][0]} <input type="text" name="nombre"><br>
    {$BDetiquetas["ES"][1]} <input type="text" name="contraseña"><br>
    <input type="button" value="{$BDetiquetas["ES"][2]}">

EOD;
} else if ($BDetiquetas[$nombre] == $BDetiquetas["EN"]) {
    echo <<<EOD
    {$BDetiquetas["EN"][0]} <input type="text" name="nombre"><br>
    {$BDetiquetas["EN"][1]} <input type="text" name="contraseña"><br>
    <input type="button" value="{$BDetiquetas["ES"][2]}">
EOD;
}
else if($BDetiquetas[$nombre] == $BDetiquetas["FR"]){
    echo <<<EOD
    {$BDetiquetas["FR"][0]} <input type="text" name="nombre"><br>
    {$BDetiquetas["FR"][1]} <input type="text" name="contraseña"><br>
    <input type="button" value="{$BDetiquetas["ES"][2]}">
EOD;
}
