<?php 
$esAjax=isset($_SERVER['HTTP_X_REQUESTED_WITH'])
?strtolower($_SERVER['HTTP_X_REQUESTED_WITH'])=='xmlhttprequest': false;
$nombre=$_GET['nombre'];
if ($esAjax){
if (time() %2) {
    echo "<h1>Que bien {$_GET['nombre']}</h1>";
}else{
    echo "<h1>Mal {$_GET['nombre']}</h1>";
}
}else{
}
?>