<?php
$nombre=isset($_POST['nombre'])?$_POST['nombre']:null;
$apellido=isset($_POST['Apellido'])?$_POST['Apellido']:null;
$foto=$_FILES['MiFoto']['name'];
$carpeta="C:\\Temporal\\";//puedes poner la que tu quieras pero apache tiene que tener permisos de escritura
copy($_FILES['MiFoto']['tmp_name'],$carpeta . $foto);//carpeta de la foto
echo "$nombre , $apellido y la imagen es";
echo <<<Radio
<img src="resultado.gif" alt="">
Radio;
?>