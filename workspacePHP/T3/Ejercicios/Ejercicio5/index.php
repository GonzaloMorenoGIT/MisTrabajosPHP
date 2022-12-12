<?php 
function InicioSesion()
{
    session_start();
    if  (isset($_SESSION["Contador"])==1){
        $_SESSION["Contador"]++;
        echo "tu numero de visitas es de {$_SESSION["Contador"]} veces";
    }else{
        echo "Bienvenido te voy a poner una sesion";
        $_SESSION["Contador"]=1;
    }
    # code...
}

function DestruyoSesion()
{
    session_destroy();
    header("location:Index.php");
}
InicioSesion();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Contador de sesiones</title>
    <input type="button" value="Destruir" onclick="DestruyoSesion()">
</head>
<body>
</body>
</html>