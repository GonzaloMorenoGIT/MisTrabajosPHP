<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h3>Aqui se muestran las cookies de nivel 0 y 1</h3>
<?php 
    foreach($_COOKIE as $k => $v){
        echo <<<Radio
        la clave es $k y el valor es $v <br>
        Radio;
    }
    ?>
</body>
</html>