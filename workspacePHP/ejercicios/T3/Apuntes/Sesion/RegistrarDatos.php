<?php 
//al poner el session start ya tengo mis variables de sesion listas
session_start();
$nombre=$_POST['nombre'];
$apellido=$_POST['apellido'];
$_SESSION['nombre']=$_POST['nombre'];
$_SESSION['apellido']=$_POST['apellido'];
header('location:Controlador.php');
?>