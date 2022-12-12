<form action="http://localhost/ejercicios/t1/Apuntes/radio.php" method="get">
    Numero1<input type="radio" name="Numeros" value="1">
    Numero2<input type="radio" name="Numeros" value="2">
    Numero3<input type="radio" name="Numeros" value="3">
    Numero4<input type="radio" name="Numeros" value="4">
    <input type="submit" value="Envar">
</form>
<?php
$Numero=$_GET['Numeros'];
echo $Numero
?>