<?php
$c = [
    'es' => [
        'R' => 'rojo',
        'Y' => 'amarillo',
        'G' => 'verde'
    ]
];
$Colores = isset($_GET['Valor1']) ? $_GET['Valor1'] : [];
echo "Tus colores favoritos son: ";
foreach ($Colores as $col) {
    echo $c['es'][$col] . " ";
}
?>