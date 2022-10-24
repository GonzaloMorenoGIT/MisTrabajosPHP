<?php
//Declaro las variables
$numero2=isset($_POST['RadioNumero'])?$_POST['RadioNumero']:null;
$Resultado=$numero2+2;
echo "<H1>$numero2+2= $Resultado</H1>";
?>