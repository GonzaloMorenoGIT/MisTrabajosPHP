<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Nivel 0</title>
</head>
<body>
    <h3>Esta es la cookie que esta en el nivel 0 1 2</h3>
    <?php 
    foreach($_COOKIE as $k => $v){
        echo <<<Radio
        la clave es $k y el valor es $v <br>
        Radio;
    }
    ?>
    <a href="CrearCookie.php">Volver</a>
</body>
</html>