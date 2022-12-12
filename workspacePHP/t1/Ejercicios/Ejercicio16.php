<?php
$nombre=isset($_GET['nombre'])?$_GET['nombre']:null;
$password=isset($_GET['pwd'])?$_GET['pwd']:null;
    echo <<<Radio
    <form action="http://localhost/ejercicios/t1/Ejercicios/Ejercicio16.php">
        Nombre <input type="text" name="nombre"><br>
        Pasword <input type="password" name="pwd"><br>
        <input type="submit" value="Enviar">
    </form>
Radio;
    if ($nombre==null||strlen($password)<6||strlen($password)>12){
        <<<Radio
        <h2>Contaseña no cumple con los caracteres</h2>
        <h3>Introducela de nuevo</h3>
        <form style:color="red" action="http://localhost/ejercicios/t1/Ejercicios/Ejercicio16.php">
        Nombre <input type="text" name="nombre"><br>
        Pasword <input type="password" name="pwd"><br>
        <input type="submit" value="Enviar">
        </form>
Radio;
    }else{
        echo "tu nombre es $nombre y tu contraseña es $password";
    }
?>