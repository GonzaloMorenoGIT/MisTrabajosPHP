//Para evitar ataques de injecion sql  dejamos los huecos con ?
<?php 
require_once 'util.BD.php';
$db=conectarMySQL();
//Inserto datos
$inserto =<<<Insertar
    insert into persona values (2,'Roberto','Dominguez')
Insertar;
$db->exec($inserto);
//Recojo datos
$consulta = 
<<<SQL
select id,nombre,Apellido 
from persona
SQL;
$resultado=$db->query($consulta);
if (!$resultado){

}else{
    foreach($resultado as $row){ 
        echo $row['id']."<br>";
        echo $row['nombre']."<br>";
}
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tabla con datos</title>
</head>
<body>
    <table>
        <?php 
        
        ?>
    </table>
</body>
</html>