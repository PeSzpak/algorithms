<?php
echo "Digite os dois numeros: " . PHP_EOL;

$n1 = intval(fgets(STDIN));
$n2 = intval(fgets(STDIN));

if ($n1 > $n2) {
    $max = $n1;
    $min = $n2;
} else {
    $max = $n2;
    $min = $n1;
}
$soma = 0;
for ($i = $min + 1; $i < $max; $i++) {
    if ($i % 2 != 0) {
        $soma += $i;
    }
}
echo "SOMA DOS IMPARES = $soma" . PHP_EOL;