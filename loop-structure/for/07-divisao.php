<?php

echo "quantos casos você vai digitar? ";
$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    echo "Entre com o numerador: ";
    $numerador = floatval(fgets(STDIN));
    echo "Entre com o denominador: ";
    $denominador = floatval(fgets(STDIN));

    if ($denominador != 0){
    $divisao = $numerador / $denominador;
    echo "DIVISÃO = " .
        number_format($divisao, 1, '.', '')  .
        PHP_EOL;
    }else
        echo "DIVISAO IMPOSSIVEL" . PHP_EOL;

}