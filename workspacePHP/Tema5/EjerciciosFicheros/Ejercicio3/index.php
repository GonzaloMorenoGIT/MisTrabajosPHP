<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Formulario</title>
</head>
<body>
    <form action="index.php" method="post">
    <fieldset>
        <legend>Formulario</legend>
        Dime la palabra : <input type="text" name="Palabra">
        <input type="submit" value="Enviar">
    </fieldset>
    </form>
    <div>
        <?php 
        $f=fopen('Articulo.md','w+');
        $fichero=fgets($f);
        echo $fichero;
        ?>
    </div>
</body>
</html>
<?php 
//Recogo la palabra que quiero buscar
$frase=isset($_POST['Palabra']) ? $_POST['Palabra']:null;
//Recogo el fichero
?>
