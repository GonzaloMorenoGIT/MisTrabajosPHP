<h1>Hola mundo</h1>
<?php 
session_start();
$nombre=isset($_SESSION['nombre'])?$_SESSION['nombre']:null;
$apellido=isset($_SESSION['apellido'])?$_SESSION['apellido']:null;
if ($nombre!=null && $apellido!=null) {
    echo "hola {$nombre}+ y {$apellido}";
}else{
header('location:Formulario.php');
}
?>