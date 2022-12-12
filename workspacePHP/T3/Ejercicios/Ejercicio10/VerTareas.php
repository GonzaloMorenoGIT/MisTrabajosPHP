<?php
$Ntarea=isset($_POST['Empleados'])?$_POST['Empleados']:null;
$Tarea=isset($_POST['Tarea'])?$_POST['Tarea']:null;
session_start();
$_SESSION['NombreUsuario']=$Ntarea;
$_SESSION[$Ntarea]=$Tarea;
    $TareaPepe=[];
    $TareaJuan=[];
    $TareaAna=[];
    switch ($_SESSION['NombreUsuario']) {
        case 'Pepe':array_push($TareaPepe,$_SESSION[$Ntarea]);break;
        case 'Juan':array_push($TareaJuan,$_SESSION[$Ntarea]);break;
        case 'Ana':array_push($TareaAna,$_SESSION[$Ntarea]);break;
        default:echo "Opcion no contemplada";break;
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>VerTareas</title>
</head>
<body>
    <h1>Ver Tareas</h1>
    <ul>
        <li>Pepe</li>
        <li>Juan</li>
        <li>Ana</li>
    </ul>
    <a href="index.php">Inicio</a>
</body>
</html>