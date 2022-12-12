<?php 
//Funciones
function Existe($bandera=null){
$nombre=isset($_COOKIE[$_POST['nombre']])?$_COOKIE[$_POST['nombre']]:0;
if ($nombre==0){
    setcookie($_POST['nombre'],1);
    echo <<<Radio
    Esta es la primera vez que entras y te pongo una kokie
   Radio;
}else{
    setcookie($_POST['nombre'],$nombre+1);
    switch ($bandera) {
        case "esp":
    echo <<<Radio
        Esta es la vez numero $nombre<br>
        <label for="España">
        <input type="radio" name="Banderas" value="{$bandera}" id="España" checked><img src="ing/españa.png" alt="España">
        </label>
        <label for="Francia">
        <input type="radio" name="Banderas" value="Francia" id="Francia" ><img src="ing/francia.png" alt="Francia">
        <label>
        <label for="ReinoUnido">
        <input type="radio" name="Banderas" value="ReinoUnido" id="ReinoUnido"><img src="ing/reinounido.png" alt="España">
        </label>
    Radio;
    break;
    case "fr":
        echo <<<Radio
            Esta es la vez numero $nombre<br>
            <label for="España">
            <input type="radio" name="Banderas" value="España" id="España" ><img src="ing/españa.png" alt="España">
            </label>
            <label for="Francia">
            <input type="radio" name="Banderas" value="{$bandera}" id="Francia" checked><img src="ing/francia.png" alt="Francia">
            <label>
            <label for="ReinoUnido">
            <input type="radio" name="Banderas" value="ReinoUnido" id="ReinoUnido"><img src="ing/reinounido.png" alt="España">
            </label>
        Radio;
    break;
    case "uk":
        echo <<<Radio
            Esta es la vez numero $nombre<br>
            <label for="España">
            <input type="radio" name="Banderas" value="España" id="España" ><img src="ing/españa.png" alt="España">
            </label>
            <label for="Francia">
            <input type="radio" name="Banderas" value="Francia" id="Francia" ><img src="ing/francia.png" alt="Francia">
            <label>
            <label for="ReinoUnido">
            <input type="radio" name="Banderas" value="{$bandera}" id="ReinoUnido"checked><img src="ing/reinounido.png" alt="España">
            </label>
         Radio;
         break; 
    default:
    echo "Opcion no contemplada vuelve a intentarlo";
    Usuarios();
        }
}
}
function Usuarios(){
    $usuarios=[
        "Admin"=>["Admin","esp"],
        "Alfa"=>["Alfa","fr"],
        "beta"=>["beta","uk"]
    ];
        echo print_r($usuarios);
     $nombre=$_POST['nombre'];
    if($usuarios[$nombre]&&$usuarios[$nombre][0]=$_POST['contraseña']){
        Existe($usuarios[$nombre][1]);
    }else{
        Echo <<<Radio
        $nombre
        El nombre del usuariuo no es correcto intentalo de nuevo
        Radio;
        header("location : index.php");
    }
}
Usuarios();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <a href="Index.php">Volver</a>
    
</body>
</html>