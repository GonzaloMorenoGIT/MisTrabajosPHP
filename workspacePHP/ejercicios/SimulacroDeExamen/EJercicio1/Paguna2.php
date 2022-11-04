<?php
$meses = array(1 => 'Enero', 2 => 'Febrero', 3 => 'Marzo', 4 => 'Abril', 5 => 'Mayo', 6 => 'Junio', 7 => 'Julio', 8 => 'Agosto', 9 => 'Septiembre', 10 => 'Octubre', 11 => 'Noviembre', 12 => 'Diciembre');
$zodiaco = array(1 => 'Capricornio', 2 => 'Acuario', 3 => 'Piscis', 4 => 'Aries', 5 => 'Tauro', 6 => 'Géminis', 7 => 'Cáncer', 8 => 'Leo', 9 => 'Virgo', 10 => 'Libra', 11 => 'Escorpio', 12 => 'Sagitario');
function GuardoDatos($meses, $zodiaco)
{
  $Nminimo = isset($_POST['inferior']) ? $_POST['inferior'] : null;
  $NMaximo = isset($_POST['Superior']) ? $_POST['Superior'] : null;
  for ($i = $Nminimo; $i <= $NMaximo; $i++) {
    if ($i==1) {
      echo <<<Radio
        <label for="$i">
        $zodiaco[$i]<input type="radio" name="zodiaco" id="$i" value="{$zodiaco[$i]}" checked="checked"><br/>
        </label>
        Radio;
        $i++;
    }
    echo <<<Radio
        <label for="$i">
        $zodiaco[$i]<input type="radio" name="zodiaco" id="$i" value="{$zodiaco[$i]}"><br/>
        </label>
        Radio;
  }
}
function RellenoLosSelect($meses)
{
  $Nminimo = isset($_POST['inferior']) ? $_POST['inferior'] : null;
  $NMaximo = isset($_POST['Superior']) ? $_POST['Superior'] : null;
  for ($i = $Nminimo; $i <= $NMaximo; $i++) {
    echo "<option value='{$meses[$i]}'>$meses[$i]</option>";
  }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Formulario</title>
</head>

<body>
  <form action="Resultado.php" method="post">
    <fieldset>
      <legend>Signos del Zodiaco</legend>
      <?php GuardoDatos($meses, $zodiaco); ?>
    </fieldset>
    <fieldset>
      <legend>Meses del Año</legend>
      <select name="meses" id="">
        <?php RellenoLosSelect($meses) ?>
      </select>
    </fieldset>
    <input type="submit" value="Continuar">
  </form>
</body>

</html>