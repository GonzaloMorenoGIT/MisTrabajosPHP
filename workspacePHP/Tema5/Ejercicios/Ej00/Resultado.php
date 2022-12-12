<?php 
$Nombre=isset($_POST['Marca']) ? $_POST['Marca'] :null;
$Precio=isset($_POST['Precio']) ? $_POST['Precio'] :null;
require_once 'util.BD.php';
$db=conectarMySQL();
$Consulta="INSERT INTO producto (Nombre,Precio) VALUES(:Nombre,:Precio)";
$sentenciaPreparade=$db->prepare($Consulta);
$sentenciaPreparade->bindParam(":Nombre",$Nombre);
$sentenciaPreparade->bindParam(":Precio",$Precio);
$sentenciaPreparade->execute();
header("location:index.php");

?>