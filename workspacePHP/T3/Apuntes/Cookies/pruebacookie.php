<?php 
setcookie('hola','bicho','1');
foreach($_COOKIE as $k => $v){
echo "$k => $v"; 
}
?>