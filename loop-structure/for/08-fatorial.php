<?php
$fat = 1;
echo "Digite o valor de N: ";
$N = intval(fgets(STDIN));
if ($N > 15) {
    echo "Não aceitamos valores maiores que 15.";
} else {
    for ($i = 1; $i <= $N; $i++) {
        $fat = $fat * $i;


    }
    echo "FATORIAL = $fat";
}
