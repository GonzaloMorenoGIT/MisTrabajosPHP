<?php 
require_once 'util.BD.php';
$db =conectarMySQL();
$consulta=
        <<<Pdo
            insert into persona(id,nombre)
            values (2,'Ana')
Pdo;

try {
    $db->exec($consulta);
    echo "<h2>Reventao</h2>";
}catch (PDOException $e){
    echo "<h2>Error</h2>";
}
?>