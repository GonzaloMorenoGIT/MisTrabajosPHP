<?php 
$nVisitas = isset ( $_COOKIE ['nVisitas'] ) ? $_COOKIE ['nVisitas'] : 0;
//($nVisitas == 0);
if ($nVisitas == 0) {
	setcookie ( "nVisitas", 1 );
	echo "<h1>BIENVENIDO</h1>";
} else {
	setcookie ( "nVisitas", $nVisitas + 1 );
	echo "Hola. Es la vez n&uacute;mero $nVisitas que visitas esta p&aacute;gina";
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
</body>
</html>