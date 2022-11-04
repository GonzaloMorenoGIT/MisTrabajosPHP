<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h2>Resultado</h2>
    <?php 
    $zodiaco=isset($_POST['zodiaco'])?$_POST['zodiaco']:null;
    $mes= isset($_POST['meses']) ? $_POST['meses'] : null;
    echo "el signo introducido es : $zodiaco<br/>";
    echo "el mes introducido es el : $mes<br/>";
    ?>
</body>
</html>