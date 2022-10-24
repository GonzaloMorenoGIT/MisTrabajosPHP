<?php
if (isset($_GET['x'])&&empty($_GET['x'])){
    echo $_GET['x'];
}else{
    echo "\$_GET['x'] no tienee valor definido";
}
?>