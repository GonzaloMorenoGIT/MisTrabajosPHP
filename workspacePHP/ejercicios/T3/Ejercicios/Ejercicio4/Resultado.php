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
    echo "El valor de la cookie es de $nombre";
}
}
function Usuarios(){
    $usuarios=[
        "Admin"=>["Admin","esp"]
    ];
        echo print_r($usuarios);
     $nombre=$_POST['nombre'];
    if($usuarios[$nombre]){
        Existe($usuarios[$nombre][1]);
    }else{
        Echo <<<Radio
        $nombre
        El nombre del usuariuo no es correcto intentalo de nuevo
        Radio;
        header("location","index.php");
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