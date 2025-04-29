<?php
echo "quantos numeros voce vai digitar? ";
$repeticao = intval(fgets(STDIN));

for ($i = 0; $i < $repeticao; $i++) {
    echo "Digite um numero: ";
    $n = intval(fgets(STDIN));
    if ($n == 0) {
        echo "NULO \n";
    } elseif ($n % 2 == 0 && $n > 0) {
        echo "PAR POSITIVO \n";
    } elseif ($n % 2 == 0 && $n < 0) {
        echo "PAR NEGATIVO \n";
    } elseif ($n % 2 != 0 && $n > 0) {
        echo "IMPAR POSITIVO \n";
    } elseif ($n % 2 != 0 && $n < 0){
        echo "IMPAR NEGATIVO \n";
    }

}