<?php
echo "dime una palabra : ";
fscanf(STDIN,"%s/n",$palabra);
echo "\n dime un numero del 1 al 6 : ";
fscanf(STDIN,"%d/n",$numero);
for ($i = 1; $i < $numero+1; $i++) {
    echo "<h".$i.">".$palabra."</h".$i.">\n";
}
for ($j = ($numero-1); $j >0; $j--) {
    echo "<h".$j.">".$palabra."</h".$j.">\n";
}
?>