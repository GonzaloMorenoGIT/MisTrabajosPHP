<?php 
session_start();
$primeraVez=isset($_SESSION['nombre'])&&$_SESSION['apellido'];
if ($primeraVez) {
    header('location:saludo.php');
}else{
    header('lacation:adios.php');
}
?>