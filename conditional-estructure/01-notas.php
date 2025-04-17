<?php
echo "Digite a primeira nota: ";
$n1 = floatval(fgets(STDIN));

echo "Digite a segunda nota: ";
$n2 = floatval(fgets(STDIN));

$soma = $n1 + $n2;

echo "NOTA FINAL = $soma". PHP_EOL;

if ($soma < 60) {
    echo "REPROVADO";
}

