<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Resultado</title>
</head>
<body>
    <h1>Resultado</h1>
    <?php 
$numero2=isset($_POST['numero2']) ? $_POST['numero2'] :null;
$numero1=$_COOKIE['numero'];
echo "Primer numero: " . $numero1."<br/>";
echo "Segundo numero: " . $numero2."<br/>";
if($numero1<$numero2){
        echo <<<Radio
        el numero $numero2 es mayor que el numero $numero1
        Radio;
}else{
    echo <<<Radio
    el numero $numero1 es mayor que el numero $numero2
    Radio;
}
?>
<br>    
<a href="index.php">volver</a>
</body>
</html>