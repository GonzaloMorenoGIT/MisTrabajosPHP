<?php 
//fgets(STDIN);//para meter por teclado SOLO NUMEROS
/*function carta($pos){
    $posOK=$pos%10;
    $sol='ninguna';
    switch ($posOK){
        case 0:$sol='as';break;
        case 1:$sol='dos';break;
        case 2:$sol='tres';break;
        case 3:$sol='cuatro';break;
        case 4:$sol='cinco';break;
        case 5:$sol='seis';break;
        case 6:$sol='siete';break;
        case 7:$sol='sota';break;
        case 8:$sol='caballo';break;
        case 9:$sol='rey';break;
    }
    return $sol;
}echo "Dime el numero maximo :";
fscanf(STDIN,"%d\n",$min);
 for ($i = 0; $i < $min; $i++) {
     echo carta($i)." ";
 }*/
$teclado=02;
$cartas=[0=>'as',1=>'dos',2=>'tres',3=>'cuatro',4=>'cinco',5=>'seis',6=>'siete',7=>'sota',8=>'caballo',9=>'rey'];
echo "dime el numero que quieres : ";
fscanf(STDIN,"%d/n",$teclado); 
for ($i=0;$i<$teclado;$i++){
    echo $cartas[$i%10]." , \n";
}

?>