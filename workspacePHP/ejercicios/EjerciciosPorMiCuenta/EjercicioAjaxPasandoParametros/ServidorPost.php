<?php 
$Texto=isset($_POST['dato1']) ? $_POST['dato1'] :null;
if($Texto!=null){
    echo $Texto;
}else{
}
?>