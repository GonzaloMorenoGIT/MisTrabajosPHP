<?php 
session_start();
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Dime el numero de sumandos</title>
</head>
<body>
    <form action="sumandos.php" method="post">
        Dime el numero de sumandos que quieres tener 
        <input type="number" name="NumeroSumandos" >
        <input type="submit" value="enviar">
    </form>
</body>
</html>