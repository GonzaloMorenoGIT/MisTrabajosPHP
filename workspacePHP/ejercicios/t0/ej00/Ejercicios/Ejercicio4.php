<?php 
//declaro varibles
$i=0;
$x=0;
$operacion=" ";
//desarrollo el codigo
fscanf(STDIN,"%d/n",$n);
$i=$n;
$x=$n;
while ($n!=0) {
    fscanf(STDIN,"%d/n",$n);
    //suma
    $i+=$n;
    //multiplicacion
    if($n!=0){
        $x*=$n;
        echo $x;
    }else {
        
    }
}
echo 'que operacion quieres :';
$operacion=readline($operacion);
switch ($operacion){
    case "suma":echo  'La suma vale :'.$i;break;
    case "multiplicacion":echo 'La multiplicacion vale : '.$x;break;
    default:'opcion no contemplada';break;
}
?>