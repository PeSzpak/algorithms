<?php
echo "Distancia percorrida:";
$distancia = floatval(readline());

echo "Combustível gasto:";
$valor = floatval(readline());

$consumo = $distancia / $valor;


echo "O consumo médio é de :$consumo";


