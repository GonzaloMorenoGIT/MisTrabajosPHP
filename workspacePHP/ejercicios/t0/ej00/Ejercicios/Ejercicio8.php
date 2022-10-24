<?php
/*
Dado un día, mes y año entre el 1 de enero de 1971
y la actualidad, mostrar el número de años, meses,
días, horas, minutos y segundos transcurridos desde
entonces hasta ahora (no es necesario tener en cuenta
años bisiestos, y se pueden considerar todos los meses 
como si tuvieran 30 días)*/

echo "dime el dia : ";
fscanf(STDIN,"%d/n",$dia);
echo "dime el mes : ";
fscanf(STDIN,"%d/n",$mes);
echo "dime el año : ";
fscanf(STDIN,"%d/n",$año);
$Dia=date("d");
$Mes=date("m");
$Año=date("Y");
$hora=date("G");
$minuto=date("i");
$segundo=date("s");
echo $Dia."\n";
echo $Mes."\n";
echo $Año."\n";
echo "$hora\n";
echo "$minuto\n";
echo "$segundo\n";
$resulAño=$Año-$año;
$resulMes=$Mes-$mes;
$resulDia=$Dia-$dia;

if ($segundo>60) {
    $minuto+1;
}if ($minuto>60) {
    $hora+1;
}if ($hora>24)
    $resulDia+1;
if ($resulDia>30){
    $resulMes+1;
}if ($resulMes>12){
    $resulAño+=1;
}
echo "La diferencia es de : $resulAño años -- $resulMes meses --$resulDia dias $minuto minutos y $segundo segundos desde la hora indicada";

?>