<?php

echo "Quantos casos você vai digitar? ";
$n = intval(fgets(STDIN));

for ($i = 0; $i < $n; $i++) {
    echo "Digite três numeros: ";
    $n1 = floatval(fgets(STDIN));
    $n2 = floatval(fgets(STDIN));
    $n3 = floatval(fgets(STDIN));

    $media = (($n1 * 2) + ($n2 * 3) + ($n3 * 5)) /10;
    echo "MEDIA = " .
        number_format($media, 1, '.', '')  .
    PHP_EOL;
}