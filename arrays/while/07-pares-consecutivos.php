<?php
echo "Digite um numero inteiro: ";
$x = intval(fgets(STDIN));

while ($x != 0) {
    $soma = 0;
    if ($x % 2 == 0) {
        $soma = $x + ($x + 2) + ($x +4) + ($x + 6) + ($x + 8);
    }else {
        $x = $x + 1;
        $soma = $x + ($x + 2) + ($x + 4) + ($x + 6) + ($x + 8);
    }
    echo "SOMA = $soma\n";

    echo "Digite um numero inteiro: ";
    $x = intval(fgets(STDIN));
}

