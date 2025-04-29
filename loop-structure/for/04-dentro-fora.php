<?php
echo "quantos numeros voce vai digitar? ";
$repeticao = intval(fgets(STDIN));
$fora = 0;
$dentro = 0;
for ($i = 0; $i < $repeticao; $i++) {
    echo "Digite um numero: ";
    $n = intval(fgets(STDIN));

    if ($n >= 10 && $n <= 20) {
        $dentro++;

    } else {
        $fora++;

    }

}
echo "DENTRO : $dentro FORA: $fora " . PHP_EOL;