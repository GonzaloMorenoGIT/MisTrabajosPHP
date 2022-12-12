<h1>Formulario</h1>
<form action="PracticasHTML.php">
	Nombre<input type="Text" name="nombre"/>
	<fieldset>
		Rojo 
		<input type="radio" name="r3[]" value="Rojo" checked="checked"/>
		Amarillo <input type="radio" name="r3[]" value="Amarillo" />
		Verde <input type="radio" name="r3[]" value="Verde" /> 
		Azul <input type="radio" name="r3[]" value="Azul" />
	</fieldset>
	<input type="submit" value="Enviar"/>
</form>
<?php
$colores=['Amarillo'=>'Amarillo','Verde'=>'Verde','Azul'=>'Azul'];
$Nombre=$_GET['nombre'];
$ColorF=$_GET['r3[]'];
echo"<h1> Tu nombre es $Nombre y tu color favorito es el {$ColorF['Verde']}</h1>";

?>