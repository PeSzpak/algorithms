<?php

do {
    echo "Deseja a tabuada para qual numero?";
    $n = intval(fgets(STDIN));

    for ($i = 1; $i <= 10; $i++) {
        echo "$n x $i = " . ($n * $i) . "\n";
    }
    echo "Deseja realizar outra tabuada? (1-Sim/2-Não): ";
    $opcao = intval(fgets(STDIN));
} while ($opcao != 2);