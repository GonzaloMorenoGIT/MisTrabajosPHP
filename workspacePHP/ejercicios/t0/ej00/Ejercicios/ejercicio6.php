<?php
    //declaro variables o arrays
    echo "nombre : ";
    fscanf(STDIN,"%s/n",$nombre);
    echo "\n edad : ";
    fscanf(STDIN,"%d/n",$edad);
    while ($nombre!="fin") {
        $personas[$nombre]=$edad;
        print_r($personas);
        fscanf(STDIN,"%s/n",$nombre);
        echo "la edad de ".$nombre." : ";
        fscanf(STDIN,"%d/n",$edad);
        if ($nombre=="fin") {
            foreach ($personas as $k =>$v){
                echo $k."-(".$v.")";
            }
        }else{
            
        }
    }
    
    //funciones
?>