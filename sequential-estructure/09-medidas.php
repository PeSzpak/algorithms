<?php
echo "Digite a media A:";
$medida_1 = floatval(readline());

echo "Digite a media B:";
$medida_2 = floatval(readline());

echo "Digite a media C:";
$medida_3 = floatval(readline());

$quadrado = $medida_1 * $medida_1;
$triangulo =  ($medida_1 * $medida_2)/2;
$trapezio = ($medida_1 + $medida_2) * $medida_3 / 2;

echo " AREA DO QUADRADO = ".
    number_format($quadrado, 2,'.','').
    PHP_EOL;
echo "AREA DO TRIANGULO = ".
    number_format($triangulo, 2,'.','').
    PHP_EOL;
echo "AREA DO TRAPEZIO = ".
    number_format($trapezio, 2,'.','').
    PHP_EOL;