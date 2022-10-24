<p>Selecciona na opcion</p>
<form
	action="http://localhost/ejercicios/t1/Ejercicios/ej18/Resultado.php"
	method="POST">
<?php
// Declaro variables
$numero1 = isset($_GET['Numero']) ? $_GET['Numero'] : null;

// Desarrollo las Funciones
function PintarRadio($num = 0)
{
    $ArrayNumeros = [
        'Uno',
        'Dos',
        'Tres',
        'Cuatro',
        'Cinco',
        'Seis',
        'Siete',
        'Ocho',
        'Nueve',
        'Diez',
        'Once',
        'Doce',
        'Trece',
        'Catorce',
        'Quince'
    ];
    if ($num < 15) {
        for ($i = 1; $i < $num + 1; $i ++) {
            echo <<<RADIO
            <label>
             {$ArrayNumeros[$i-1]}<input type="radio" name="RadioNumero" id="numero" value="$i"><br>
            
            RADIO;
        }
        echo <<<RA
                </label>
        RA;
    } else {
        echo "Te has pasado intentalo de nuevo ";
    }
}
// Llamo a las funciones
echo PintarRadio(($_POST['Numero']) ? $_POST['Numero'] : null);
?>
<input type="submit" value="Envar">
</form>