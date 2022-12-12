Conexion A base de datos 
La equivalencia del JDBC en php aqui tenemos PDO 
como conectarse a my sql 
hay que descomentar la extension pdo _mysql
para preparar la consulta se haria 
$variable=$bd->prepare($consulta);
$sp->bind_param(El hueco sustituido ,$variablerecibida);
$sp->execute();