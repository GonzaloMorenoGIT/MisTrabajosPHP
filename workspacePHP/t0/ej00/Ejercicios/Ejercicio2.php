<?php 
echo "Introduce n: ";
fscanf(STDIN,"%d\n",$n);
$c="+";
for ($i = 0; $i < $n; $i++) {
    echo "[$i] ";
    for ($j = $n; $j > $i; $j--) {
        echo $j.' '; 
    }
    echo "\n";
}
?>