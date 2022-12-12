<?php
//ejercicio 1
fscanf(STDIN,"%d\n",$n);
$Max=$n;
$Min=$n;
while ($n!=0) {
 echo 'Introduce n: ';
 fscanf(STDIN,"%d\n",$n);
     if ($n>$Max) {
         $Max=$n;
     }
     if ($n<$Min) {
         $Min=$n;
     }
 }
 echo "Min/Max($Min/$Max)";
?>