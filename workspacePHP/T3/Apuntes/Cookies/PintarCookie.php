<?php 
if($_COOKIE!=null){
    foreach($_COOKIE as $k=>$v){
        echo "[$k] es $v \n ";
    }
}else{
    echo"No hay cookies";
}
?>