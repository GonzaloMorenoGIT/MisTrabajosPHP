<?php 
session_start();
$_SESSION['Contador'];
for ($i=0; $i < $_SESSION['Contador']+1 ; $i++) { 
    $numero[$i]=isset($_POST['numero'.$i])?$_POST['numero'.$i]:null;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h2>El Resultado es </h2>
    <div class="resultado">
    <?php
    for ($i=0; $i < $_SESSION['Contador']+1 ; $i++) { 
        echo "<h1>$numero[$i]+</h1>";
    }
    echo "<h1>=".array_sum($numero)."</h1>";
    ?>
    <br>
    <a href="index.php">Inicio</a>
    </div>
</body>
</html>