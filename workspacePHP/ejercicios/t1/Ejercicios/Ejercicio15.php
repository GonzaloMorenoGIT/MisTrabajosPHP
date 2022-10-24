<?php
$nombre=isset($_GET['nombre'])?$_GET['nombre']:null;
$password=isset($_GET['pwd'])?$_GET['pwd']:null;
if ($nombre==null&&$password==null) {
   echo <<<Radio
    <form action="http://localhost/ejercicios/t1/Ejercicios/Ejercicio15.php">
        Nombre <input type="text" name="nombre"><br>
        Pasword <input type="password" name="pwd"><br>
        <input type="submit" value="Enviar">
    </form>
Radio;
}else{
    echo "Tu nombre es $nombre, y la contraseña es $password";
}
?>