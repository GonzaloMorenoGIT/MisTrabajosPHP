<?php
if (isset($_POST['nombre'])) {
    session_start();
    $_SESSION['usuarios'] = "esto es el valor de la sesion";
    session_name($_POST['nombre']);
    header("location:ValidarPHP.php");
} else {
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" contnt="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>

<body>
    <form method="post">
        Dime el nombre <input type="text" name="nombre">
        <input type="submit" value="Enviar">
    </form>
</body>

</html>