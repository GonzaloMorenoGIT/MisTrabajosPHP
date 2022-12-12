<?php 
$artuculo=file_get_contents('Articulo.md');
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Leer Fichero</title>
</head>
<body>
    <textarea name="" id="" cols="30" rows="15" readonly><?php echo $artuculo?></textarea>
</body>
</html>