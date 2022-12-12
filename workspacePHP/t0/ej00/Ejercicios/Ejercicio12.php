<?php
$entrada=readline("Dime una frase : ");
$fraseseparada=explode(" ",$entrada);
for ($i = 0; $i < sizeof($fraseseparada); $i++) {
    if ($fraseseparada[$i]=="tonto"||$fraseseparada[$i]=="Tonto"){
        echo $fraseseparada[$i]="****";
    }else{
        echo " $fraseseparada[$i] ";
    }
}
?>