<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>Valor de la sesion <?php echo($_SESSION['usuarios']);?></h2>
    <h3>Esto es lo que recibe la variable de la sesion</h3>
    <a href="DestruirSesion.php">
        destruir_sesion
    </a>
</body>
</html>