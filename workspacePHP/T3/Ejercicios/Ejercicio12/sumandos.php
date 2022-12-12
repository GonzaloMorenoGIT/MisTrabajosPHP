<?php 
session_start();
$NumeroSumandos = isset($_POST['NumeroSumandos']) ? $_POST['NumeroSumandos'] : null;
$_SESSION['Contador'] = $NumeroSumandos;
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
    <form action="Resultado.php" method="post">
<?php
for ($i = 1; $i <= $NumeroSumandos; $i++) {
    echo <<<Radio
       introduce el numero $i<br>
       <input type="name" name="numero$i"><br>
    Radio;
}
?>
<br>
<input type="submit" value="Enviar">
</form>
<a href="index.php">Volver</a>
</body>
</html>