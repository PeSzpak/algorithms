<?php
echo"Base do Retangulo:";
$base = floatval(readline());

echo"Altura do retangulo";
$altura = floatval(readline());

$area = $base * $altura;
$perimetro = 2 * ($base * $altura);
$diagonal = sqrt(pow($altura, 2) + pow($base, 2));

echo "AREA = " .
    number_format($area, 4,'.','').
    PHP_EOL;
echo "PERIMETRO = " .
    number_format($perimetro, 4,'.','').
    PHP_EOL;
echo "DIAGONAL = " .
    number_format($diagonal, 4,'.','').
    PHP_EOL;