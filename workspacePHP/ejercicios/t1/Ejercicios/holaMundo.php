
<h2>Hola mundo</h2>
<form action="http://localhost/ejercicios/t1/Ejercicios/holaMundo.php">
<input type="text" name="nombre"/>
<input type="Submit"/>
</form>
<?php
$Nombre=$_GET['nombre'];
echo "<h1>Hola mundo bienvenido $Nombre</h1>";
?>