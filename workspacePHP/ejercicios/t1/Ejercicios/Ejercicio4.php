<form action="http://localhost/ejercicios/t1/Ejercicios/Ejercicio4.php">
dime un nombre <input type="text" name="nombre"></br>
dime un apellido <input type="text" name="apellido"></br>
<input type="submit" value="Enviar">
</form>
<?php
    $nombre=$_GET['nombre'];
    $apellido=$_GET['apellido'];
    echo "Somos los mas $nombre del  $apellido";
?>