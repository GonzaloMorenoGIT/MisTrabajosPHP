<?php 
echo "Dime el nunero menor :";
fscanf(STDIN,"%d\n",$min);
echo "Dime el numero maximo :";
fscanf(STDIN,"%d\n",$max);

for ($i=0;$i<$min;$i++){
for ($a=$min; $a<=$max; $a++){
    echo $a." ";
}
}
?>