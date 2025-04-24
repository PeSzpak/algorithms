<?php
echo "Digite um numero inteiro: ";
$x = intval(fgets(STDIN));

while ($x != 0) {
    $soma = 0;
    if ($x % 2 != 0) {
        $x = $x + 1;
    }
    $i = 0;
    while ($i < 5) {
        $soma = $soma + ($x + ($i * 2));
        $i++;
    }
    echo "SOMA = $soma\n";

    echo "Digite um numero inteiro: ";
    $x = intval(fgets(STDIN));
}