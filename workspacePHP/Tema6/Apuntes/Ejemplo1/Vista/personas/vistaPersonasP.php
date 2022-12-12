<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
    <table>
        <tr>
            <td>ID</td>
            <td>Nombre</td>
        </tr>        
        <?php 
    foreach ($resultado as $fila) :
        ?>
    <tr>
        <td><?=$fila['id']?></td>
        <td><?=$fila['nom']?></td>
    </tr>
    <<?php endforeach ?>
</table>
</body>
</html>