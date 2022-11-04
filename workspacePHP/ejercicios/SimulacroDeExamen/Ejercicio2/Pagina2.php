<?php 
$numero1=isset($_POST['numero1'])?$_POST['numero1']:null;
setcookie("numero",$numero1);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Dime Otronumero</title>  
</head>
<body>
    <form action="Resultado.php" method="post">
        <h3>Introduce un numero</h3>
        <input type="number" name="numero2" id="">
        <input type="submit" value="Siguiente">
    </form>
</body>
</html>